<?php

namespace App\Exports;

use App\User;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UserExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return User::select(['id','name','email', 'email_verified_at','password'])->get();
        return User::all();
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->email,
            $user->email_verified_at,
            $user->password,
        ];
    }

    public function headings(): array
       {
          return [
            'id',
            'Name',
            'Email',
            'Email Verified at',
            'Password',
           ];
        }
}
