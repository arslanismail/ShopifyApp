@extends('shopify-app::layouts.default')

@section('styles')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

@endsection

@section('content')
    <form method="post" action="{{route('addscript')}}">
        {{ csrf_field() }}
            <div class="col">
                <input name="submit" type="submit" class="form-control" value="submit">
            </div>

        </div>
    </form>
@endsection

@section('scripts')

    @parent
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.mainPageTitle = 'Main Page';
        ShopifyApp.ready(function(){
            ShopifyApp.Bar.initialize({
                title: 'Welcome',
                buttons: {
                    secondary: {
                        label: 'Documentation',
                        href: 'https://github.com/ohmybrew/laravel-shopify',
                        target: 'new'
                    }
                }
            });
        });
    </script>

@endsection