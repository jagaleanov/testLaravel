<template>
	<div class="form-group">
		<label :for="name">{{ label }}</label>
		<select
			:id="name"
			:value="value"
			v-on:input="$emit('input', $event.target.value)"
			class="custom-select"
			:class="{
				'is-valid': !validator.$error && validator.$dirty,
				'is-invalid': validator.$error,
			}"
		>
			<option value="">--</option>
			<option
				v-for="(option, index) in options"
				v-bind:value="option.value"
				v-bind:key="index"
			>
				{{ option.text }}
			</option>
		</select>
		<small v-if="validator.$params.required && !validator.required">
			El campo es requerido
		</small>
	</div>
</template>

<script>
export default {
	props: {
		label: {
			type: String,
			required: true,
		},
		name: {
			type: String,
			required: true,
		},
		value: {
			type: String,
			required: true,
		},
		validator: {
			type: Object,
			required: true,
		},
		options: {
			type: Array,
			required: true,
		},
	}
};
</script>