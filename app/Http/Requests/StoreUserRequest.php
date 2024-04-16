<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users|max:191',
            'name' => 'required|string',
            'group_user' => 'gt:0',
            'password' => 'required|string|min:6',
            'repassword' => 'required|string|same:password',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Vui lòng nhập password',
            'name.required' => 'Vui lòng nhập đầy đủ họ tên',
            'group_user.gt' => 'Vui lòng nhập chọn nhóm thành viên',
            'repassword.required' => 'Vui lòng nhập nhập lại mật khẩu',
            'repassword.same' => 'Mật khẩu nhập lại không khớp',
        ];
    }
}
