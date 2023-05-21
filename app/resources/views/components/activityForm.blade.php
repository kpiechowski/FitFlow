



<div class="login-container d-f fd-c p-40 w-50">


<form action="{{ url('/userPanel/addActivity/') }}" method="POST" id="login-form">
    @csrf


    <label for="type">Rodzaj treningu: </label>
    <select name="act_type" id="act_type" class="input_button">
        @foreach ($types as $type)
            <option data-slug="{{$type->slug}}" value="{{$type->id}}">
                {{ $type->name }}
            </option>

        @endforeach
    </select>

    <label for="trening_start">Data treningu: </label>
    <input class="input_button" type="date" id="act_start" name="act_start" value="{{$date}}" min="2023-01-01" max="2099-12-31">


    <input type="text" name="act_name" id="act_name" placeholder="Nazwa treningu" class="input_button" required>
    <input type="text" name="act_value" id="act_value" placeholder="Wartość treningu [km|punkty|długości]" class="input_button" required>
    <input type="text" name="act_time" id="act_time" placeholder="Czas [min]" class="input_button" required>

    <textarea rows="6" cols="51" name="desc" id="desc" placeholder="Krótki opis treningu | Jak się dzisiaj czujesz?" class="" ></textarea>




    <button type="submit" class="button_form">Dodaj trening</button>



</form>

</div>
