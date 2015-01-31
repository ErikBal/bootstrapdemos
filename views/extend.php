<section id="extend">
	<h1> <code>&:extend</code> </h1>
	<p>You can apply your "extended"-selectors(p1, p2 ,p3) with the selector <code>&:extend</code> onto your class (.fontcolor) without any reference, because it is not css.</p>
	<p class="p1">The first sentence with a font-size of 14px, but the same font-color with .fontcolor-class.</p>
	<p class="p2">The second sentence with a font-size of 16px, but the same font-color with .fontcolor-class.</p>
	<p class="p3">The third sentence with a font-size of 18px, but the same font-color with .fontcolor-class.</p>
<pre>
.fontcolor{
	color: @example-font-color;
	}

<span class="pre-comment">//Now I use &:extend for .fontcolor</span>

.p1{
 	&:extend(.fontcolor);
 	font-size: 14px;
}

.p2{
	 &:extend(.fontcolor);
 	font-size: 16px;
}

.p3{
 	&:extend(.fontcolor);
 	font-size: 18px;
}



	/*Variables*/
	@example-font-color: #2243d1;

</pre>
	<h3>
	<code>&:extend</code> Syntax
	</h3>
	<p>
	<code>&:extend</code> is attached to a selector or placed into a ruleset.<br/>
	you can write <code>&:extend</code> in two ways:
	</p>
<pre>
.a:extend(.fontcolor){				Example A
 	font-size: 16px;
	}


.a{
 	&:extend(.fontcolor);			Example B
 	font-size: 16px;
 	}
</pre>
	<p>
		You can <code>&:extend</code> all instances of a class ,with "all":
	</p>
<pre>
.a:extend(.fontcolor all){
 <span class="pre-comment">//extends all instances of .fontcolor (for example: .fontcolor.fontsize, .fontweight.fontcolor)</span>
}

.a:extend(.fontcolor){
<span class="pre-comment">//extends only .fontcolor</span>
}
</pre>
<br />
	<p>
		<bold><code>&:extend</code> attached to selector</bold>, looks like a pseudo-class with selector as a parameter.<br/>
		You can put multiple extend clauses into a selector, but you have to put the extends at the end of the selector.
	</p>
<pre>
pre:hover:extend(.fontcolor .fontsize)<span class="pre-comment">//After the selector</span>
pre:hover :extend(.fontcolor .fontsize)<span class="pre-comment">//After the selector, with a space in between</span>
pre:hover:extend(.fontcolor .fontsize):extend(div pre)<span class="pre-comment">//Multiple extends</span>
pre:hover:extend(.fontcolor .fontsize, div pre)<span class="pre-comment">//Multiple extends (does the same)</span>
</pre>
</section>