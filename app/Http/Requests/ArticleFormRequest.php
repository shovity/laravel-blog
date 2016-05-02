<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Xu ly truoc khi thuc hien request
        return true; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Xu ly du lieu request
        return [
            'title' => 'required|min:5', // Bat buoc va it nhat 5 ki tu. Xem trong lavavel validation
            'content' => 'required|min:10'
        ];
    }
}
