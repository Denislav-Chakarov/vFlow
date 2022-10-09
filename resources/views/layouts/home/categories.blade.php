@foreach ($categories as $element)
<div class='col-lg-3 col-12'>
    <a href="#" style='color:black;'>
        <div class='languageCategory'>
            <img width='200' class='categoryImg' height='150' src="{{URL('/images/' .$element->image)}}" alt="">
            <div class='bottomPartLanguage'>
                <div style='text-align:center;'>
                    <br>
                    <span style='text-align:center;'>{{$element->name}}</span>
                </div>
                <br>
                <div class='TopicsQuestions'>
                    <div style='text-align:center;padding:0.5rem;'>
                        <span style='text-align:center;'>63</span>
                        <p style='font-size:0.7em;'>Active topics</p>
                    </div>
                    <div style='text-align:center;padding:0.5rem;'>
                        <span>1050</span>
                        <p style='font-size:0.7em;'>Asked questions</p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

@endforeach