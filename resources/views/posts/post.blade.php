<!--
  /   Display for an individual post on the index page.
  /
  /   @included index.blade.php
  -->

<!-- Info -->
<p class="results">
  <a href="/posts/{{ $post->id }}">
    {{ $post->bib_number }}
  | {{ $post->first_name }} {{ $post->last_name}}
  | IN - {{ $post->time_in }}
  @if ($post->time_out == NULL)
    | STILL IN TENT
  @else
    | OUT - {{ $post->time_out }}
  @endif
  </a>
</p>

<!-- Post Content -->
{{ $post->body }}
