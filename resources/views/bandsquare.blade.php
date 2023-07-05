@foreach ($bands as $band)
        @if ($loop->first)
        <div class="row align-items-top justify-content-center p-3">
        @endif
        @if ($band->headliner == 0 )
            <div class="col-lg-3 p-3">
        @else
            <div class="col-lg-4 p-3">
        @endif
                <div class="hoverable">
                <div class="imagetext imagetitle">{{$band->name}}</div>
                    <img src="{{$band->photo}}" alt="Avatar" class="hoverimage">
                        
                    <div class="overlay">
                        <div class="imagetext imagetitle">{{$band->name}}</div>
                        <div class="imagetext imagebio">{{$band->bio}}</div>
                        <div class="imagetext" style="align-content: center; top:90%;">
                            <h1>
                                @if ($band->youtube != 'null')<a href="https://{{$band->youtube}}" class="link-danger imagemed"><i class="bi bi-youtube"></i></a>@endif
                                @if ($band->bandcamp != 'null')<a href="https://{{$band->bandcamp}}" class="link-danger imagemed"><i class="bi bi-music-note-list"></i></a>@endif
                                @if ($band->facebook != 'null')<a href="https://{{$band->facebook}}" class="link-danger imagemed"><i class="bi bi-facebook"></i></a>@endif
                                @if ($band->instagram != 'null')<a href="https://{{$band->instagram}}" class="link-danger imagemed"><i class="bi bi-instagram"></i></a>@endif
                                @if ($band->twitter != 'null')<a href="https://{{$band->twitter}}" class="link-danger imagemed"><i class="bi bi-twitter"></i></a>@endif
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        @if ($loop->last)
        </div>
        @endif
@endforeach