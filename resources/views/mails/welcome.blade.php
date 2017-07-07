<h1>Hi, {{ $name }}!</h1>

<div>
    Thanks for creating an account with the verification Proofread.
    Please follow the link below to confirm your email address
    {{ URL::to('register/verify/' . $confirmation_code) }}.<br/>

</div>