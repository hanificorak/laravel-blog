<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <!--  created with Free Online Sitemap Generator www.xml-sitemaps.com  -->
    <url>
        <loc>https://hanificorak.com/</loc>
        <lastmod>2020-06-17T14:21:44+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>https://hanificorak.com/hakkimda</loc>
        <lastmod>2020-06-17T14:21:44+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://hanificorak.com/hizmetlerim</loc>
        <lastmod>2020-06-17T14:21:44+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://hanificorak.com/blog</loc>
        <lastmod>2020-06-17T14:21:44+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://hanificorak.com/iletisim</loc>
        <lastmod>2020-06-17T14:21:44+00:00</lastmod>
        <priority>0.80</priority>
    </url>

        @foreach ($blog as $bl)
        {!! $bl->xmlurl !!} 
        @endforeach

</urlset>