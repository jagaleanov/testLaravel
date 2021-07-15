
<template>
	<form @submit.prevent="onSubmit">
		<fieldset>
			<legend>Tipo documento</legend>
			<div class="form-group">
				<div class="form-check form-check-inline">
					<input
						v-model="$v.form.document_type.$model"
						class="form-check-input"
						type="radio"
						id="document_type_cc"
						name="document_type"
						value="CC"
					/>
					<label class="form-check-label" for="document_type_cc">CC</label>
				</div>
				<div class="form-check form-check-inline">
					<input
						v-model="$v.form.document_type.$model"
						class="form-check-input"
						type="radio"
						id="document_type_ce"
						name="document_type"
						value="CE"
					/>
					<label class="form-check-label" for="document_type_ce">CE</label>
				</div>
				<div class="form-check form-check-inline">
					<input
						v-model="$v.form.document_type.$model"
						class="form-check-input"
						type="radio"
						id="document_type_pas"
						name="document_type"
						value="PAS"
					/>
					<label class="form-check-label" for="document_type_pas">PAS</label>
				</div>
				<div class="form-check form-check-inline">
					<input
						v-model="$v.form.document_type.$model"
						class="form-check-input"
						type="radio"
						id="document_type_ti"
						name="document_type"
						value="TI"
					/>
					<label class="form-check-label" for="document_type_ti">TI</label>
				</div>
			</div>
		</fieldset>

		<BaseInput
			label="Número"
			name="document_number"
			:validator="$v.form.document_number"
			v-model="$v.form.document_number.$model"
		></BaseInput>

		<button type="submit" class="btn btn-primary" :disabled="!formValid">
			Submit
		</button>

		<pre>
		{{ $v }}
		</pre
		>
	</form>
</template>
<script>
import BaseInput from "../components/BaseInput.vue";
import { required, minLength } from "vuelidate/lib/validators";
import { mapState, mapMutations, mapActions } from "vuex";

export default {
	data() {
		return {
			form: {
				document_type: "",
				document_number: "",
			},
		};
	},
	components: {
		BaseInput,
	},
	validations: {
		form: {
			document_type: {
				required,
			},
			document_number: {
				required,
				minLength: minLength(2),
			},
		},
	},
	computed: {
		formValid() {
			return !this.$v.$invalid;
		},

		//states
		...mapState(["inscripted", "runnerId", "inscriptionId", "runnerData"]),
	},
	methods: {
		async onSubmit() {
			if (!this.formValid) {
				console.log("form invalid");
			} else {
				this.setRunnerData({
					documentNumber: this.$v.form.document_number.$model,
					documentType: this.$v.form.document_type.$model,
				});

				await this.getRunnerId();

				if (this.runnerId !== null) {
					await this.getInscriptionId();
					this.setInscripted();
					if (this.inscripted === false) {
						this.$router.push({ name: "inscriptionForm" });
					} else {
						console.log("**USUARIO INSCRITO*********************************");
					}
				} else {
					this.$router.push({ name: "inscriptionForm" });
				}
			}
		},

		//mutations
		...mapMutations(["setInscripted", "setRunnerData"]),

		//actions
		...mapActions(["getRunnerId", "getInscriptionId"]),
	},
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
