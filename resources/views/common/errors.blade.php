@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Ah, c'est pas bon !!</h4>

        <p>
            Corrigez les erreurs avant d'aller plus loin
        </p>
        <hr>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif