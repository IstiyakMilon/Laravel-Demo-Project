@extends('layout/master')

@section('body')
  <h1>Hello All there!</h1>
 <!-- @{{$subject}} //It will show as normal code structure-->
 <h1>
 <!-- <h1>{{ isset($subject)?$subject: 'Data Not Found'}} -->
 @if($subject)
  {{$subject}}
 @else
   echo "Data Not Found";
 @endif
  
 </h1>
 
 <!-- // It will run as variable and not as script -->
 <!-- {!!$subject!!} // It will run as script-->
 
@endsection