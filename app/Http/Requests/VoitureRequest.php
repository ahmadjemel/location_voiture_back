<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoitureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string,] \Illuminate\Contracts\Validation\ValidationRule,array<mixed>,string>
     */
    public function rules(): array
    {
        return [
            'immatricule'=>["required,max:20,unique:voitures"],
            'nbr_place'=>["required"],
            'nbr_port'=>["required"],
            'nbr_CV'=>["required"],
            'marque_id'=>["required","max:10"],
            'modele'=>["required","max:20"],
            'kilometrage'=>["required"],
            'carburant'=>["required","max:10"],
            'photo'=>["required","mimes:png,jpg,jpeg","max:2048"]
            ];
    }

}
