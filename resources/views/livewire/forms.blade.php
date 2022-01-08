
<div>
    <form wire:submit.prevent="submit">
        @if(session()->has('success'))
            <div style="color:green">
                {{session('success')}}
            </div>
        @endif
            <input type="hidden" wire:model="hiddenId" value="{{$hiddenId}}">
        Name : <br> <input type="text" wire:model.lazy="name"> <br>
        @error('name')
        <span style="color:red">{{$message}} </span>
        @enderror
        Email : <br> <input type="text" wire:model.lazy="email"> <br>
        @error('email')
        <span style="color:red">{{$message}} </span>
        @enderror
        <button type="submit"> Save </button>
    </form>

    <table>
        <h3> Lists ::</h3>
        <a href="javascript:void(0)"
           wire:click="addForm"> Add </a>
        <tr>
            <td>Sr No.</td>
            <th> Name </th>
            <th> Email </th>
            <th>Actions </th>
        </tr>
        @php $i=1; @endphp
        @foreach($allData as $ad)
            <tr>
                <td> {{$i}}</td>
                <td>{{$ad->name}}</td>
                <td>{{$ad->email}}</td>
                <td>
                    <a href="javascript:void(0)"
                       wire:click="editForm({{$ad->id}})">
                        Edit
                    </a>
                    <a href="javascript:void(0)"
                       wire:click="deleteForm({{$ad->id}})">
                        Delete
                    </a>
                </td>
            </tr>
            @php $i++; @endphp
            @endforeach
    </table>
    {{$allData->links()}}
</div>
