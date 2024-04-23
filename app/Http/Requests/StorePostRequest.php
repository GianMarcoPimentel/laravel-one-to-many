<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|max:255',
            'description' => 'required|max:2000',
            'src' => 'file|required|max:1024|mimes:jpg,png,bmp',
            'used_technologies' => 'required|max:255',
            'link' => 'required|max:1000',
                        
        ];
    }

     //introduco una funzione per stampare i messaggi 
     public function messages(): array {

        return [
            'name.required' => ' Devi inserire il nome del progetto',
            'name.max' => 'Il titolo deve contenre massimo :max caratteri',
            'description.required' => ' Devi inserire la descrizione del progetto',
            'description.max' => 'La descrizione deve contenre massimo :max caratteri',
            'src.required' => ' Devi inserire un immagine per il progetto',
            'src.max' => "L'url dell'immagine deve contenre massimo :max caratteri",
            'used_technologies.required' => ' Devi inserire le tecnologie usate per il progetto',
            'used_technologies.max' => 'Questo campo deve contenre massimo :max caratteri',
            'link.required' => ' Devi inserire il link del progetto',
            'link.max' => 'Il link deve contenre massimo :max caratteri',

        ];
     }
}
