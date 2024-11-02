<h1>hello form laravel course</h1>

<h1>{{date('Y')}}</h1>

<h2>{{ strtoupper($fname . ' ' . $mname . " " . $lname ) }}</h2>


{{-- WE CAN USE ALL CONSTAINTS LIKE THIS --}}
<P>{{ Illuminate\Support\Str::after('mullah zain mujhaid', 'mullah') }}</P>
<P>{{ Illuminate\Foundation\Application::VERSION }}</P>
<P>{{ PHP_VERSION }}</P>