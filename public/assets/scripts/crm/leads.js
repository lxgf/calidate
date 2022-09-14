const setEvents = () => {
    const targets = [
        '.create-lead',
        '.crm-leads__input',
        '.remove-lead'
    ]

    targets.forEach(target => {
        $(target).off()

        if (target === '.create-lead')
            $(target).click(e => {
                createLead(e)
            })

        if (target === '.crm-leads__input')
            $(target).change(e => updateLead(e))

        if (target === '.remove-lead')
            $(target).click(e => {
                removeLead(e)
            })
    })
}

setEvents()


const createLead = () => {
    $.get(`/api/create-lead`, lead => {
        lead = JSON.parse(lead)

        const leadHTML = `
            <div class="crm-leads__row crm-lead" data-id="${lead.id}">
                <div class="crm-lead-ol">
                    <button class="crm-lead-ol__remove-btn remove-lead">
                        ✕
                    </button>
                </div>

                <input type="text" class="crm-leads__cell crm-leads__input crm-lead__name" data-col="name" value="${lead.name}">
                <input type="text" class="crm-leads__cell crm-leads__input crm-lead__surname" data-col="surname" value="${lead.surname}">
                <input type="text" class="crm-leads__cell crm-leads__input crm-lead__email" data-col="email" value="${lead.email}">
                <input type="email" class="crm-leads__cell crm-leads__input crm-lead__page" data-col="page" value="${lead.page}">
                <p class="crm-leads__cell crm-lead__created-at" data-col="created_at">
                  ${new Date(lead.created_at).toISOString().slice(0, 19).replace('T', ' ')}
                </p>
            </div>
        `

        $(leadHTML).appendTo('.crm-leads')

        setEvents()
    });
}

const updateLead = e => {
    const target = $(e.target)
    const id = target.closest('.crm-lead').attr('data-id')
    const col = target.attr('data-col')
    const value = target.val()
    console.log('sending...')

    $.get(`/api/update-lead?id=${id}&col=${col}&value=${value}`, lead => console.log(lead))
}

const removeLead = e => {
    const target = $(e.target)
    const lead = target.closest('.crm-lead')
    const id = lead.attr('data-id')

    $.get(`/api/remove-lead?id=${id}`);

    lead.remove()
}

const getLeads = () => {
    $.get('/api/get-leads', (res) => {
        $('.crm-lead').remove()

        res = JSON.parse(res)
        res.forEach(lead => {
            const leadHTML = `
                <div class="crm-leads__row crm-lead" data-id="${lead.id}">
                    <div class="crm-lead-ol">
                        <button class="crm-lead-ol__remove-btn remove-lead">
                            ✕
                        </button>
                    </div>

                    <input type="text" class="crm-leads__cell crm-leads__input crm-lead__name" data-col="name" value="${lead.name}">
                    <input type="text" class="crm-leads__cell crm-leads__input crm-lead__surname" data-col="surname" value="${lead.surname}">
                    <input type="text" class="crm-leads__cell crm-leads__input crm-lead__email" data-col="email" value="${lead.email}">
                    <input type="email" class="crm-leads__cell crm-leads__input crm-lead__page" data-col="page" value="${lead.page}">
                    <p class="crm-leads__cell crm-lead__created-at" data-col="created_at">
                      ${new Date(lead.created_at).toISOString().slice(0, 19).replace('T', ' ')}
                    </p>
                </div>
            `

            $(leadHTML).appendTo('.crm-leads')
            setEvents()
        })
    });
}
