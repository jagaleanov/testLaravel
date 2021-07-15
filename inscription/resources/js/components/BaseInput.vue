<template>
	<div class="form-group">
		<label :for="name">{{ label }}</label>
		<input
			class="form-control"
			v-on:input="$emit('input', $event.target.value)"
			:type="type"
			:id="name"
			:value="value"
			:readonly="readonly"
			:class="{
				'is-valid': validator.$dirty && !validator.$error,
				'is-invalid': validator.$error,
			}"
		/>
		<small v-if="validator.$params.required && !validator.required">
			El campo es requerido y no puede estar vacío.
		</small>
		<small v-if="validator.$params.email && !validator.email">
			El campo debe contener una direccion de correo electrónico válida.
		</small>
		<small v-if="validator.$params.number && !validator.number">
			El campo debe contener un número
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo debe contener mínimo
			{{ validator.$params.minLength.min }} caracteres.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo debe contener máximo
			{{ validator.$params.minLength.min }} caracteres.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener exactamente {param} caracteres.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} solo puede contener caracteres alfabéticos.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} solo puede contener caracteres alfa-numéricos.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} solo puede contener caracteres alfa-numéricos y espacios.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} solo puede contener caracteres alfabéticos y guiones.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener un número.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} solo puede contener caracteres numéricos.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener un número entero.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} no tiene el formato correcto.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} no coincide con el campo {param}.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe ser diferente al campo {param}.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener un valor único.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener un valor único.
		</small>

		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} solo debe contener dígitos.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener un número natural mayor a 0.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener un decimal.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe ser menor que {param}.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener un número menor o igual a {param}.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener un número mayor a {param}.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener un número mayor o igual a {param}.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe contener uno de los siguientes valores: {param}.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} solo puede contener caracteres alfabéticos y espacios.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} solo puede contener letras, números, guiones, puntos y el
			signo numeral.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} solo puede contener letras, números, guiones, puntos y el
			signo numeral.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El campo {field} debe incluir por lo menos una minuscula, una mayuscula y
			un dígito.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			El formato de la fecha no es el correcto, por favor digítalo así:
			aaaa-mm-dd.
		</small>
		<small v-if="validator.$params.minLength && !validator.minLength">
			Imposible acceder al mensaje de error correspondiente al campo {field}.
		</small>

		<pre>
			{{ validator }}
		</pre
		>
	</div>
</template>

<script>
export default {
	props: {
		type: {
			type: String,
			default: "text",
			vallidator(value) {
				return ["text", "email", "tel", "date", "password"].includes(value);
			},
		},
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
		readonly: {
			type: Boolean,
			default: false,
			required: false,
		},
		validator: {
			type: Object,
			required: true,
		},
	},
};
</script>