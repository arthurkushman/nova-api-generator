Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'nova-api-generator',
            path: '/nova-api-generator',
            component: require('./components/Tool'),
        },
    ])
})
