<!-- Three -->
<section id="three" class="wrapper style2 special">
    <div class="inner">
        <header class="major narrow">
            <h2>Get in touch</h2>

            <p>For Systems Development enquiries contact me below</p>
        </header>
        @include('common.errors')

                <!-- New Form -->
        {!! Form::open(array('action' => 'ContactsController@store')) !!}

        <div class="container 75%">
            <div class="row uniform 50%">
                <div class="6u 12u$(xsmall)">
                    {!! Form::text('name', '', array('placeholder' => 'Name')) !!}
                </div>
                <div class="6u$ 12u$(xsmall)">
                    {!! Form::text('email', '',  array('placeholder' => 'Email')) !!}
                </div>
                <div class="12u$">
                    {!! Form::text('recaptcha', '',  array('placeholder' => 'Recaptcha')) !!}
                </div>
                <div class="12u$">
                    {!! Form::textarea('message', '', array('placeholder' => 'Message')) !!}
                </div>
            </div>
        </div>

        <ul class="actions">
            <li><input type="submit" class="special" value="Submit"/></li>
            <li><input type="reset" class="alt" value="Reset"/></li>
        </ul>

        {!! Form::close() !!}


    </div>
</section>