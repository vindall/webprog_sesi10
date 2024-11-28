<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA=Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Form Registration</title>
</head>
<body>
    <div class="container">
        <div class="container">
            <h1 class="display-5 fw-bold">
                {{__('test.title')}}
            </h1>
        </div>

        <form action="{{url('store' , ['locale' => app()->getLocale()])}}" method = "POST">
            @csrf
            <!-- <input type="hidden" name="_token" value ="iYD6ItkPVJdwI6rE4W3MYsiAcaXWHQmNvtDwUi3k"> -->
            <div class="container">
                <label for="nim" class="form-label">{{__('test.nim')}}</label>
                <input type="text" name="nim" id="nim" class ="form-control">
                @error('nim')
                    <small class="text-danger">{{ $message }}</small>
                @enderror   
            </div>
            <div class="container">
                <label for="name" class="form-label">{{__('test.name')}}</label>
                <input type="text" name="name" id="name" class ="form-control">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror  
            </div>
            <div class="container">
                <label for="email" class="form-label">{{__('test.email')}}</label>
                <input type="text" name="email" id="email" class ="form-control">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror  
            </div>
            <div class="container mt-1">
                <label class="form-label">{{__('test.gender')}}</label>
            </div>
            <div class="container mb-1">
                <input type="radio" class="btn-check" name="gender" id="male" value = "M" autocomplete="off" checked>
                <label class="btn" for="male">{{__('test.male')}}</label>

                <input type="radio" class="btn-check" name="gender" id="female" value = "F"autocomplete="off">
                <label class="btn" for="female">{{__('test.female')}}</label>
            </div>

            <div class="container">
                <label for="major" class="form-label">{{__('test.major')}}</label>
                <select name="major" id="major" class="form-select">
                    <option value="Information Technology">{{__('test.information-technology')}}</option>
                    <option value="Information System">{{__('test.information-system')}}</option>
                    <option value="Computer Science">{{__('test.computer-science')}}</option>
                    <option value="Computer Techniques">{{__('test.computer-techniques')}}</option>
                    <option value="Telecommunication Techniques">{{__('test.telecommunication-techniques')}}</option>
                </select>
            </div>

            <div class="container">
                <label for="address" class="form-label">
                {{__('test.address')}}
                </label>
                <textarea name="address" id="address" class="form-control"></textarea>
            </div>

            <div class="container mt-2">
                <input type="submit" value="{{__('test.submit')}}" class = "btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
