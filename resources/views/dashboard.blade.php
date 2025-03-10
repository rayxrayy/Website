<x-app-layout>
    <h1 style="font-size: 40px;">
        <p> This is my college project so there are limited features, will update you guys if it
            got deployed in real. </p>
    </h1>
    @if(auth()->user()->hasRole('student'))
    <div class="right">
        <div class="recent-updates">
            <h1 style="font-size:18px; ">Status</h1>
            <div class="updates">
                <div id="notificationContainer">
                    @foreach(auth()->user()->unreadNotifications as $notification)
                    <div style="font-size: 16px;">{{ $notification->data['message'] }}</div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="insights">
            <div class="sales">
                <span class="material-icons-shar">{{ $studentCount }}</span>
                <div class="middle">
                    <div class="left">
                        <h2>Total Students</h2>
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="/images/st.png" alt="">

                        </div>
                    </div>
                </div>
            </div>

            <div class="income a">
                <span class="material-icons-shar">{{ $collegecount }}</span>
                <div class="middle">
                    <div class="left">
                        <h2>Total Colleges </h2>
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="/images/college.png" alt="">

                        </div>
                    </div>
                </div>

            </div>

            <div class="order a">
                <span class="material-icons-shar">{{ \App\Models\Course::count() }}</span>
                <div class="middle">
                    <div class="left">
                        <h2>Total Courses</h2>
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="./images/course.png" alt="">
                        </div>
                    </div>
                </div>

            </div>

            <div class="order a">
                <span class="material-icons-shar">{{ $publicCount }}</span>
                <div class="middle">
                    <div class="left">
                        <h2>updates</h2>
                    </div>
                    <div class="progress">
                        <div class="number">
                            <img src="/images/images.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
</x-app-layout>