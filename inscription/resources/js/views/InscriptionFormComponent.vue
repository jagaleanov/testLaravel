<template>
	<form @submit.prevent="onSubmit">
		<router-link to="/foo">Go to Foo</router-link>
		<router-link to="/bar">Go to Bar</router-link>
		<router-link to="/">Go to List</router-link>

		<BaseInput
			label="Nombre"
			name="name"
			:validator="$v.form.name"
			v-model="$v.form.name.$model"
		></BaseInput>

		<BaseInput
			label="Apellido"
			name="last_name"
			:validator="$v.form.last_name"
			v-model="$v.form.last_name.$model"
		></BaseInput>

		<BaseInput
			label="Correo electrónico"
			name="email"
			:validator="$v.form.email"
			v-model="$v.form.email.$model"
		></BaseInput>

		<BaseInput
			label="Confirmación correo electrónico"
			name="email_confirm"
			:validator="$v.form.email_confirm"
			v-model="$v.form.email_confirm.$model"
		></BaseInput>

		<BaseInput
			label="Fecha de nacimiento"
			name="birthdate"
			type="date"
			:validator="$v.form.birthdate"
			v-model="$v.form.birthdate.$model"
		></BaseInput>

		<BaseInput
			label="Edad"
			name="age"
			:validator="$v.form.age"
			v-bind:readonly="true"
			v-model="$v.form.age.$model"
		></BaseInput>

		<BaseSelect
			label="País"
			name="country"
			v-model="$v.form.country.$model"
			:validator="$v.form.country"
			v-bind:options="optionsCountry"
		></BaseSelect>

		<BaseSelect
			v-if="$v.form.country.$model == 'Colombia'"
			label="Departamento"
			name="state"
			v-model="$v.form.state.$model"
			:validator="$v.form.state"
			v-bind:options="optionsState"
		></BaseSelect>

		<BaseInput
			v-if="
				$v.form.country.$model != 'Colombia' && $v.form.country.$model != ''
			"
			label="Departamento / Estado"
			name="state"
			:validator="$v.form.state"
			v-model="$v.form.state.$model"
		></BaseInput>

		<BaseSelect
			v-if="$v.form.country.$model == 'Colombia'"
			label="Ciudad / Municipio"
			name="city"
			v-model="$v.form.city.$model"
			:validator="$v.form.city"
			v-bind:options="optionsCity"
		></BaseSelect>

		<BaseInput
			v-if="
				$v.form.country.$model != 'Colombia' && $v.form.country.$model != ''
			"
			label="Ciudad"
			name="city"
			:validator="$v.form.city"
			v-model="$v.form.city.$model"
		></BaseInput>

		<BaseInput
			label="Dirección"
			name="address"
			:validator="$v.form.address"
			v-model="$v.form.address.$model"
		></BaseInput>

		<BaseInput
			label="Teléfono"
			name="phone"
			type="tel"
			:validator="$v.form.phone"
			v-model="$v.form.phone.$model"
		></BaseInput>

		<BaseSelect
			label="Género"
			name="gender"
			v-model="$v.form.gender.$model"
			:validator="$v.form.gender"
			v-bind:options="optionsGender"
		></BaseSelect>

		<BaseInput
			label="EPS"
			name="eps"
			:validator="$v.form.eps"
			v-model="$v.form.eps.$model"
		></BaseInput>

		<BaseSelect
			label="Grupo sanguineo/RH"
			name="blood"
			v-model="$v.form.blood.$model"
			:validator="$v.form.blood"
			v-bind:options="optionsBlood"
		></BaseSelect>

		<BaseSelect
			label="Talla camiseta"
			name="blood"
			v-model="$v.form.shirt.$model"
			:validator="$v.form.shirt"
			v-bind:options="optionsShirt"
		></BaseSelect>

		<BaseInput
			label="Código promocional"
			name="promocode"
			v-model="$v.form.promocode.$model"
			:validator="$v.form.promocode"
		></BaseInput>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</template>

<script>
import BaseInput from "../components/BaseInput.vue";
import BaseSelect from "../components/BaseSelect.vue";
import { required, minLength, email } from "vuelidate/lib/validators";
import { mapState, mapMutations, mapActions } from "vuex";

export default {
	data() {
		return {
			form: {
				document_type: "",
				document_number: "",
				name: "",
				last_name: "",
				email: "",
				email_confirm: "",
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
				shirt: "",
				promocode: "",
			},
			optionsBlood: [
				{ text: "O+", value: "O+" },
				{ text: "O-", value: "O-" },
				{ text: "A+", value: "A+" },
				{ text: "A-", value: "A-" },
				{ text: "B+", value: "B+" },
				{ text: "B-", value: "B-" },
				{ text: "AB+", value: "AB+" },
				{ text: "AB-", value: "AB-" },
			],
			optionsGender: [
				{ text: "Femenino", value: "F" },
				{ text: "Masculino", value: "M" },
			],
			optionsShirt: [],
			optionsCountry: [],
			optionsState: [],
			optionsCity: [],
		};
	},
	components: {
		BaseInput,
		BaseSelect,
	},
	validations: {
		form: {
			name: {
				required,
				minLength: minLength(2),
			},
			last_name: {
				required,
				minLength: minLength(2),
			},
			email: {
				required,
				email,
			},
			email_confirm: {
				required,
			},
			birthdate: {
				required,
			},
			age: {
				required,
			},
			country: {
				required,
			},
			state: {
				required,
			},
			city: {
				required,
			},
			address: {
				required,
			},
			phone: {
				required,
			},
			gender: {
				required,
			},
			eps: {
				required,
			},
			blood: {
				required,
			},
			shirt: {
				required,
			},
			promocode: {
				required,
			},
		},
	},
	computed: {
		formValid() {
			return !this.$v.$invalid;
		},

		//states
		...mapState([
			"runnerId",
			"countries",
			"states",
			"cities",
			"shirts",
			"runnerData",
		]),
	},
	methods: {
		setCountriesOptions(list) {
			this.optionsCountry = list;
		},
		setStatesOptions(list) {
			this.optionsState = list;
		},
		setCitiesOptions(list) {
			this.optionsCity = list;
		},
		setShirtsOptions(list) {
			this.optionsShirt = list;
		},
		changeCountry() {
			this.form.state = "";
			this.form.city = "";
		},
		async changeCities(stateVal) {
			await this.getCities(stateVal);
			this.setCitiesOptions(this.cities);
		},
		onSubmit() {
			if (!this.formValid) {
				console.log("form invalid");
			} else {
				if(this.runnerId == null){
					
				}else{

				}
			}
		},
		//mutations
		...mapMutations([]),
		//actions
		...mapActions(["getCountries", "getStates", "getCities", "getShirts"]),
	},
	watch: {
		"form.country": function () {
			this.changeCountry();
		},
		"form.state": function (newVal) {
			if (this.form.country == "Colombia") {
				this.changeCities(newVal);
			}
		},
	},
	async created() {
		await this.getCountries();
		this.setCountriesOptions(this.countries);

		await this.getStates();
		this.setStatesOptions(this.states);
		console.log(this.states);

		await this.getShirts();
		this.setShirtsOptions(this.shirts);
	},
};
</script>
