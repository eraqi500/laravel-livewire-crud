<div>
    Student Name <br>
    <input type="text" wire:model="name">
    Address <br>
    <textarea wire:model="address"></textarea> <br>
    Gender <br>
    <input type="radio" value="Male" wire:mode="gender"> Male
    <input type="radio" value="female" wire:mode="gender"> Female <br>
    Subjects <br>
    <input type="checkbox" value="physics" wire:mode="subjects"> physics <br>
    <input type="checkbox" value="chemistry" wire:mode="subjects"> chemistry <br>
    <input type="checkbox" value="math" wire:mode="subjects"> math<br>
    <hr>
    <select>
        <option value=""> Please Select </option>
        <option value="comp" wire:model="course"> Computer</option>
        <option value="electric"  wire:model="course"> Electrical </option>
        <option value="mechanic"  wire:model="course"> Mechanical </option>
    </select>
    Student Name:: {{$name}} <br>
    Address :  {{$address}} <br>
    Gender :  {{$gender}} <br>
    Subjects :
    <ul>
        @foreach($subjects as $sub)
            <li> {{$sub}} </li>
            @endforeach
    </ul>
    course :  {{$course}} <br>
</div>
