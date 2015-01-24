<section id="variables">
	<article>

		<h2> 
			Variables 
		</h2>

		<p>
			I am creating easy Variables firstly.
		</p>
		<p>
			I used @example-color 2 times now.
		</p>
		<p class="hover">
			And even hover with this color.
		</p>

	</article>
</section>
<section id="interpolation">

		<h2>
			Variable Interpolation
		</h2>

		<p id="interpolation-p1"> 
			We used variables to work with css values.
			We can also use variables on selector names, property names, Urls and @import(s)
		</p>

		<p class="blackbox">
			The class I am using for this p-tag is "blackbox", but in my less file I use @bbox: blackbox;
		</p>

		<article>
			Here , I use @pic: "../images"; to have a faster way to get to "images"-folder.
		</article>

		<p id="interpolation-p2">
			I changed the "color"-property to "farbe".-----><br />
			p{<br />
			@{farbe}: @example-color-gre;<br />
		</p>

		<p id="interpolation-p3">
			I've given the variable a name.
		</p>

</section>
<section id="lazy-loading">

		<h2>
			Lazy Loading
		</h2>

		<p class="test1">
			Example one: Snippet Version (variable inside less)
		</p>

		<p class="test2">
			Example two: Another valid Version of Less (variables in extra section)
		</p>

</section>