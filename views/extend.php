<section id="extend">
	<h1> Extend </h1>
	<p>You can extend your selectors with <code>&:extend</code> onto your class without any reference, because it is not css.</p>
	<p class="p1">The first sentence with a font-size of 14px, but the same font-color with .fontcolor-class.</p>
	<p class="p2">The second sentence with a font-size of 16px, but the same font-color with .fontcolor-class.</p>
	<p class="p3">The third sentence with a font-size of 18px, but the same font-color with .fontcolor-class.</p>
<pre>
.fontcolor{
		color: @example-font-color;
	}

Now I use &:extend for .fontcolor

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
}

r
/*Variables*/
@example-font-color: #2243d1;

</pre>

