@extends('masterLayout.master')

@section('content')

<div class='container-fluid' style='background:linear-gradient(50deg,#1E2D40,#151F32);'>
    <div class='row'>
        <div class='col-3'>
            <div class='left-side-discuss'>
                <a href="#">New Discussion</a>
                <br>
                <br>
                <br>
                <ul>
                    <li><a href='#'>All Threads</a></li>
                    <li><a href='#'>Social Feed</a></li>
                    <li><a href='#'>Channels</a></li>
                    <li><a href='#'>My Questions</a></li>
                    <li><a href='#'>My Participation</a></li>
                    <li><a href='#'>My Best Answers</a></li>
                    <li><a href='#'>Following</a></li>
                    <li><a href='#'>Popular this Week</a></li>
                    <li><a href='#'>Popular All Time</a></li>
                    <li><a href='#'>Saved</a></li>
                    <li><a href='#'>Unsolved</a></li>
                    <li><a href='#'>No Replies Yet</a></li>
                    <li><a href='#'>Leaderboard</a></li>
                </ul>
            </div>
        </div>
        <div class='col-6'>
            <div class='row'>
                <div class='middle-discuss'>
                    <select name="questionCategory" id="questionCategory">
                        <option value="latest=1">Latest</option>
                        <option value="popularWeek=1">Popular this Week</option>
                        <option value="popularTime=1">Popular all Time</option>
                        <option value="solved=1">Solved</option>
                        <option value="unsolved=1">Unsolved</option>
                        <option value="noReplies=1">No Replies</option>
                        <option value="myQuestions=1">My Questions</option>
                        <option value="myAnswers=1">My Answers</option>
                    </select>

                    <select name="questionType" id="questionType">
                        <option value="all=1">All</option>
                        <option value="laravel=1">Laravel</option>
                        <option value="php=1">Php</option>
                        <option value="sql=1">Sql</option>
                        <option value="java=1">Java</option>
                    </select>

                    <div style='display:flex;width:100%;justify-content:end;align-items:flex-end;'>
                        <div class='sortIcons'>
                            <i class="fa-solid fa-chart-simple"></i>
                            <i class="fa-solid fa-table-cells-large"></i>
                        </div>
                        <div class='searchDiscuss'>
                            &ensp;<i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Begin your search...">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class='row'>
                <div class='discussRow'>
                    <div style='display:flex;'>
                        <a href='#'><img width='80' height='80' src="{{URL('/AvatarImgs/defaultLaravelProfile.jpg')}}" alt=""></a>
                        <p class='limitedText'>&ensp;&ensp;Laravel 9 A copy of the letter to the client does not exists anymore</p>
                        <i class="fa-solid fa-eye">&ensp;780</i>
                        <i class="fa-solid fa-comment">&ensp;640</i>
                        <a class='typeTopic' href="#">Laravel</a>
                    </div>
                     <p class='discuss_description_text'>Hello!
                        Connected (PHPMailer) to the site, but a copy of the letter to the client does not come! As an administrator, everything comes to me, but not to the client.
                        public function StoreReservation(Request $request) {
                            $reservations = Reservation::</p>
                            <a class='replied_ago' href="#">viktor3316<span>&ensp;replied 4 days ago</span></a>
                </div>
            </div>
        </div>
        <div class='col-3'>
            <div class='right-side-discuss'>
                <img width='150' height='150' src="{{URL('/images/react-beyond-the-basics.png')}}" alt="">     
                <p>React - Beyond the Basics</p>
                <p>So you've learned the basic of building apps with React but want to learn more...</p>  
                <a href="#">Go to React Topics</a> 
            </div>
        </div>
    </div>
</div>


@stop