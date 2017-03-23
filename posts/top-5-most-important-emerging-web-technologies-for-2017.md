## Docker
<script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/962_RC10/embed_loader.js"></script> <script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"docker","geo":"","time":"today 5-y"}],"category":0,"property":""}, {"exploreQuery":"q=docker","guestPath":"https://trends.google.com:443/trends/embed/"}); </script>

## React
## WebAssembly
## BlogDown
Yes I know, this last important emerging web technology for 2017 is kinda a bait
and switch. However, I really think you should know about it. BlogDown is a back-end
agnostic, zero compilation, markdown blogging platform. In other words, all
the complex logic used to serve the blog runs on the clients computer. As far as I can
tell, it is the first truly front-end only blogging platform.

So, how back-end agnostic is BlogDown? Well, BlogDown can be run strait off of an S3
or Google bucket. So really anything that can serve files can serve BlogDown. The
infrastructure required for BlogDown is the exact infrastructure you would need
for a static website. However, BlogDown is a far cry from the maintenance static
websites required. All of the pages and taxonomies are neatly tucked away into
organized markdown files.

You may be thinking that blogging platforms similar to BlogDown already exist, like
[Jekyl](https://jekyllrb.com/) for example. However, platforms like Jekyl are
generators. In other words, you have to compile your markdown files before you can
update your website. BlogDown is as simple as putting files in a directory.

Just for kicks and giggles, BlogDown actually supports a host of formats besides
markdown, including HTML, PDF, and a special dynamic HTML file that can access
the rich set of exposed API's BlogDown offers.

BlogDown is also super flexible. It supports custom themes, modules, styles, and
taxonomies. It is currently in beta stage, and has yet to be documented, but be
prepared to hear a lot more about BlogDown in 2017.
