<article class="card my-3 text-dark" @php(post_class())>
  <img class="card-img" src={{ the_post_thumbnail('large') }}
  <header class="card-img-overlay">
    <h2 class="card-title"><a  class="text-dark" href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary card-body">
    @php(the_excerpt())
  </div>
</article>
