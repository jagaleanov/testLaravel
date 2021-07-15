window.Vue = require('vue').default;
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        inscripted: false,
        runnerId: null,
        inscriptionId: null,
        countries: [],
        states: [],
        cities: [],
        shirts: [],
        runnerData: {
            documentNumber: '',
            documentType: '',
            name: "",
            lastName: "",
            email: "",
            birthdate: "",
            age: "",
            country: "",
            state: "",
            city: "",
            address: "",
            phone: "",
            gender: "",
            eps: "",
            blood: "",
        },
        inscriptionData: {
            shirt: "",
            promocode: "",
            total: "",
        },
    },
    mutations: {
        setRunnerId(state, value) {
            state.runnerId = value;
        },
        setInscriptionId(state, value) {
            state.inscriptionId = value;
        },
        setCountries(state, array) {
            state.countries = array;
        },
        setStates(state, array) {
            state.states = array;
        },
        setCities(state, array) {
            state.cities = array;
        },
        setShirts(state, array) {
            state.shirts = array;
        },
        setRunnerData(state, runnerData) {
            state.runnerData.documentType = runnerData.documentType
            state.runnerData.documentNumber = runnerData.documentNumber
        },
        setInscripted(state) {
            if (state.runnerId === null || state.inscriptionId === null) {
                state.inscripted = false;
            } else {
                state.inscripted = true;
            }
        },
        completeRunnerData(state, runnerData) {
            state.runnerData.name = runnerData.name
            state.runnerData.lastName = runnerData.lastName
            state.runnerData.email = runnerData.email
            state.runnerData.birthdate = runnerData.birthdate
            state.runnerData.country = runnerData.country
            state.runnerData.state = runnerData.state
            state.runnerData.city = runnerData.city
            state.runnerData.address = runnerData.address
            state.runnerData.phone = runnerData.phone
            state.runnerData.gender = runnerData.gender
            state.runnerData.eps = runnerData.eps
            state.runnerData.blood = runnerData.blood
        },
        completeRunnerData(state, runnerData) {
            state.inscriptionData.shirt = runnerData.shirt
            state.inscriptionData.promocode = runnerData.promocode
            state.inscriptionData.total = runnerData.total
        },
    },
    actions: {
        getRunnerId: async function ({ commit }) {

            const response = await axios.get('/api/runners?document_type=' + this.state.runnerData.documentType + '&document_number=' + this.state.runnerData.documentNumber);

            console.log('response')
            console.log(response)

            if (response.data.length > 0) {
                commit('setRunnerId', response.data[0].id);
            } else {
                commit('setRunnerId', null);
            }
        },
        getInscriptionId: async function ({ commit }) {

            const response = await axios.get('/api/runners/' + this.state.runnerId + '/inscriptions');

            console.log('response')
            console.log(response)

            if (response.data.length > 0) {
                commit('setInscriptionId', response.data[0].id);
            } else {
                commit('setInscriptionId', null);
            }
        },
        getCountries: async function ({ commit }) {

            const response = await axios.get("/api/countries");

            console.log('responseCountries')
            console.log(response)

            if (response.data.length > 0) {

                let newList = []

                response.data.forEach(function (register) {

                    newList.push({
                        text: register.name,
                        value: register.name,
                    })
                })

                commit('setCountries', newList);
            } else {
                commit('setCountries', []);
            }
        },
        getStates: async function ({ commit }) {

            const response = await axios.get("/api/states");

            console.log('responseStates')
            console.log(response.data)

            if (response.data.length > 0) {

                let newList = []

                response.data.forEach(function (register) {

                    newList.push({
                        text: register.name,
                        value: register.name,
                    })
                })

                commit('setStates', newList);
            } else {
                commit('setStates', []);
            }
        },
        getCities: async function ({ commit }, stateVal) {

            if (stateVal != "") {

                const response = await axios.get('/api/states/' + stateVal + '/cities');

                console.log('responseCities')
                console.log(response)

                if (response.data.length > 0) {

                    let newList = []

                    response.data.forEach(function (register) {

                        newList.push({
                            text: register.name,
                            value: register.name,
                        })
                    })

                    commit('setCities', newList);
                } else {
                    commit('setCities', []);
                }
            } else {
                commit('setCities', []);
            }
        },
        getShirts: async function ({ commit }) {

            const response = await axios.get("/api/shirts");

            console.log('responseShirts')
            console.log(response)

            if (response.data.length > 0) {

                let newList = []

                response.data.forEach(function (register) {

                    newList.push({
                        text: register.size,
                        value: register.size,
                    })
                })

                commit('setShirts', newList);
            } else {
                commit('setShirts', []);
            }
        },
    }
});