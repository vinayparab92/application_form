<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    //


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','fathername','mothername','dateofbirth','gender','address1','address2',
'address3',
'country',
'state',
'city',
'pincode',
'uid',
'paddress1',
'paddress2',
'paddress3',
'pcountry',
'pstate',
'pcity',
'ppincode',
'caste',
'mobileno',
'altno',
'email',
'certno',
'centre',
'ssc_board',
'ssc_year',
'ssc_per',
'hsc_board',
'hsc_year',
'hsc_per',
'graduation',
'graduation_per',
'graduation_year',
'graduation_board',
'post_graduation',
'post_graduation_per',
'post_graduation_year',
'post_graduation_board',
'prelims_17',
'mains_17',
'interview_17',
'prelims_18',
'mains_18',
'interview_18',
'prelims_19',
'mains_19',
'interview_19',
'area',
'ph',
'disability',
'finance_limit',
'past_benefit',
'scheme',
'terms',
'password',
'password_confirmation',
    ];
}
