<?php
namespace App\Http\Livewire;
use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Country;
use App\State;
use App\City;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\ApplicationForm;
use Carbon\Carbon;
use App\Rules\finance_limit;
use App\Rules\PastBenefits;

class Form extends Component
{
    public $name;
    public $fathername;
    public $mothername;
    public $dateofbirth;
    public $gender;
    public $address1;
    public $address2;
    public $address3;
    public $country;
    public $state;
    public $city;
    public $pincode;
    public $uid;
    public $paddress1;
    public $paddress2;
    public $paddress3;
    public $pcountry;
    public $pstate;
    public $pcity;
    public $ppincode;
    public $caste;
    public $mobileno;
    public $altno;
    public $email;
    public $certno;
    public $centre;
    public $ssc_board;
    public $ssc_year;
    public $ssc_per;
    public $hsc_board;
    public $hsc_year;
    public $hsc_per;
    public $graduation;
    public $graduation_per;
    public $graduation_year;
    public $graduation_board;
    public $post_graduation;
    public $post_graduation_per;
    public $post_graduation_year;
    public $post_graduation_board;
    public $prelims_17;
    public $mains_17;
    public $interview_17;
    public $prelims_18;
    public $mains_18;
    public $interview_18;
    public $prelims_19;
    public $mains_19;
    public $interview_19;
    public $area;
    public $ph;
    public $disability;
    public $finance_limit;
    public $past_benefit;
    public $scheme;
    public $terms;
    public $password;
    public $password_confirmation;
    

   

    public function updated($field)
    {
        
        $this->validateOnly($field, [
            'name' => 'required|regex:/^[\pL\s\-]+$/u|min:6',
            'fathername' => 'required|alpha',
            'mothername' => 'required|alpha',
            'dateofbirth'=> 'required|date',
            'gender'=> 'required|in:male,female',
            'address1'=> 'required|alpha_num|min:20',
            'address2'=> 'required|alpha_num|min:20',
            'address3'=> 'required|alpha_num|min:20',
            'country'=>'required|exists:App\Country,name|max:255',
            'state'=>'required|exists:App\State,name',
            'city'=>'required|exists:App\City,name',
            'pincode'=>'required|digits:6',
            'uid'=> 'required|min:12|numeric',
            'paddress1'=> 'required|alpha_num|min:20',
            'paddress2'=> 'required|alpha_num|min:20',
            'paddress3'=> 'required|alpha_num|min:20',
            'pcountry'=>'required|exists:App\Country,name|max:255',
            'pstate'=>'required|exists:App\State,name',
            'pcity'=>'required|exists:App\City,name',
            'ppincode'=>'required|digits:6',
            'caste'=> 'required|max:255',
            'mobileno'=> 'required|min:10|numeric',
            'altno'=> 'required|min:10|numeric',
            'email'=>'required|email',
            'certno'=>'required|min:10|numeric',
            'centre'=>'required',
            'ssc_board'=>'required|alpha|min:25',
            'ssc_year'=>'required|digits:4',
            'ssc_per'=>'required|string|max:5', 
            'hsc_board'=>'required|alpha|min:25', 
            'hsc_year'=>'required|digits:4',
            'hsc_per'=>'required|string|max:5',
            'graduation'=>'required',
            'graduation_per'=>'required|string|max:5',
            'graduation_year'=>'required|digits:4',
            'graduation_board'=>'required|alpha|min:25',
           
            'post_graduation_per'=>'string|max:5',
            'post_graduation_year'=>'digits:4',
            'post_graduation_board'=>'alpha|min:25',
            'prelims_17'=>'required|in:yes,no',
            'mains_17'=>'required|in:yes,no',
            'interview_17'=>'required|in:yes,no',
            'prelims_18'=>'required|in:yes,no',
            'mains_18'=>'required|in:yes,no',
            'interview_18'=>'required|in:yes,no',
            'prelims_19'=>'required|in:yes,no',
            'mains_19'=>'required|in:yes,no',
            'interview_19'=>'required|in:yes,no',
            'area'=>'required|in:rural,urban',
            'ph'=>'required|in:yes,no',
            'disability'=>'required_if:ph,yes',
            'finance_limit'=>['required','in:yes,no',new finance_limit],
            'past_benefit'=>'required|in:yes,no',
            'scheme'=>['required_if:past_benefit,yes',new PastBenefits],
            'terms'=>'required',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|same:password',
            



        ]);

    }

    

    public function saveContact()
    {

        $validatedData = $this->validate([
                        'name' => 'required|regex:/^[\pL\s\-]+$/u|min:6',
            'fathername' => 'required|alpha',
            'mothername' => 'required|alpha',
            'dateofbirth'=> 'required|date',
            'gender'=> 'required|in:male,female',
            'address1'=> 'required|alpha_num|min:20',
            'address2'=> 'required|alpha_num|min:20',
            'address3'=> 'required|alpha_num|min:20',
            'country'=>'required|exists:App\Country,name|max:255',
            'state'=>'required|exists:App\State,name',
            'city'=>'required|exists:App\City,name',
            'pincode'=>'required|digits:6',
            'uid'=> 'required|min:12|numeric',
            'paddress1'=> 'required|alpha_num|min:20',
            'paddress2'=> 'required|alpha_num|min:20',
            'paddress3'=> 'required|alpha_num|min:20',
            'pcountry'=>'required|exists:App\Country,name|max:255',
            'pstate'=>'required|exists:App\State,name',
            'pcity'=>'required|exists:App\City,name',
            'ppincode'=>'required|digits:6',
            'caste'=> 'required|max:255',
            'mobileno'=> 'required|min:10|numeric',
            'altno'=> 'required|min:10|numeric',
            'email'=>'required|email',
            'certno'=>'required|min:10|numeric',
            'centre'=>'required',
            'ssc_board'=>'required|alpha|min:25',
            'ssc_year'=>'required|digits:4',
            'ssc_per'=>'required|alpha_num|max:5', 
            'hsc_board'=>'required|alpha|min:25', 
            'hsc_year'=>'required|digits:4',
            'hsc_per'=>'required|alpha_num|max:5',
            'graduation'=>'required',
            'graduation_per'=>'required|alpha_num|max:5',
            'graduation_year'=>'required|digits:4',
            'graduation_board'=>'required|alpha|min:25',
            
            'post_graduation_per'=>'alpha_num|max:5',
            'post_graduation_year'=>'digits:4',
            'post_graduation_board'=>'alpha|min:25',
            'prelims_17'=>'required|in:yes,no',
            'mains_17'=>'required|in:yes,no',
            'interview_17'=>'required|in:yes,no',
            'prelims_18'=>'required|in:yes,no',
            'mains_18'=>'required|in:yes,no',
            'interview_18'=>'required|in:yes,no',
            'prelims_19'=>'required|in:yes,no',
            'mains_19'=>'required|in:yes,no',
            'interview_19'=>'required|in:yes,no',
            'area'=>'required|in:rural,urban',
            'ph'=>'required|in:yes,no',
            'disability'=>'required_if:ph,yes',
            'finance_limit'=>['required','in:yes,no',new finance_limit],
            'past_benefit'=>'required|in:yes,no',
            'scheme'=>['required_if:past_benefit,yes',new PastBenefits],
            'terms'=>'required',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|same:password',
           
        ]);
        $data=new ApplicationForm;
        $data->name=$this->name;
$data->fathername=$this->fathername;
$data->mothername=$this->mothername;
$data->dateofbirth=$this->dateofbirth;
$data->gender=$this->gender;
$data->address1=$this->address1;
$data->address2=$this->address2;
$data->address3=$this->address3;
$data->country=$this->country;
$data->state=$this->state;
$data->city=$this->city;
$data->pincode=$this->pincode;
$data->uid=$this->uid;
$data->paddress1=$this->paddress1;
$data->paddress2=$this->paddress2;
$data->paddress3=$this->paddress3;
$data->pcountry=$this->pcountry;
$data->pstate=$this->pstate;
$data->pcity=$this->pcity;
$data->ppincode=$this->ppincode;
$data->caste=$this->caste;
$data->mobileno=$this->mobileno;
$data->altno=$this->altno;
$data->email=$this->email;
$data->certno=$this->certno;
$data->centre=$this->centre;
$data->ssc_board=$this->ssc_board;
$data->ssc_year=$this->ssc_year;
$data->ssc_per=$this->ssc_per;
$data->hsc_board=$this->hsc_board;
$data->hsc_year=$this->hsc_year;
$data->hsc_per=$this->hsc_per;
$data->graduation=$this->graduation;
$data->graduation_per=$this->graduation_per;
$data->graduation_year=$this->graduation_year;
$data->graduation_board=$this->graduation_board;
$data->post_graduation=$this->post_graduation;
$data->post_graduation_per=$this->post_graduation_per;
$data->post_graduation_year=$this->post_graduation_year;
$data->post_graduation_board=$this->post_graduation_board;
$data->prelims_17=$this->prelims_17;
$data->mains_17=$this->mains_17;
$data->interview_17=$this->interview_17;
$data->prelims_18=$this->prelims_18;
$data->mains_18=$this->mains_18;
$data->interview_18=$this->interview_18;
$data->prelims_19=$this->prelims_19;
$data->mains_19=$this->mains_19;
$data->interview_19=$this->interview_19;
$data->area=$this->area;
$data->ph=$this->ph;
$data->disability=$this->disability;
$data->finance_limit=$this->finance_limit;
$data->past_benefit=$this->past_benefit;
$data->scheme=$this->scheme;
$data->terms=$this->terms;
$data->password=HASH::make($this->password);
$data->password_confirmation=HASH::make($this->password_confirmation);
$data->save();
    session()->flash('status','form fill successfully');
    return redirect('done');
    }

    public function render()
    {
        $country1=Country::all();
        $state1=State::all();
        $city1=City::all();
        return view('livewire.form',['country1'=>$country1,'state1'=>$state1,'city1'=>$city1]);
    }

   
}
