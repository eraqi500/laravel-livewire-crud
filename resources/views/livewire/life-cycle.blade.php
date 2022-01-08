<div>

    Name1 :<input type="text" wire:model="name"> <br>
    Name2:<input type="text" wire:model="name2"> <br>
    <hr>
    <h3>
      Hook Function
    </h3>
    <ul>
        @foreach($hookProperty as $prop)
            <li> {{$prop}}</li>
            @endforeach
    </ul>
</div>
