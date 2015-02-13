<section id="paramixin1">
	<h2>
		Parametric Mixins
	</h2>
	<p>
	Mixins can also take arguments, which are variables passed to the block of selectors when it is mixed in.<br />
	For Example:
	</p>
	<pre>
.square(@length) {
	width: @length;
	height: @length;
}

<span class="pre-comment">// How we can mix this into rulesets:</span>

#big-square {
  .square(300px);
}

.smaller-square {
  .square(250px);
}

<span class="pre-comment">// Parametric Mixins can be defined with default values also:</span>

.square(@length: 275px) {
	width: @length;
	height: @length;
}

<span class="pre-comment">// which we add like:</span>

#medium-square {
	.square;
}

<span class="pre-comment">// A Square with 275px sides.</span>
	</pre>
</section>



<section id="paramixin2">
	<h2>
		Mixins With Multiple Parameters
	</h2>
	<p>
		Use the Semicolon ; to seperate parameters and use Commas , to seperate mixins.<br />
		
	</p>
	<ul>
		<li>two arguments and each contains comma separated list: <code>.name(1, 2, 3; something, else)</code>,</li>
		<li>three arguments and each contains one number: <code>.name(1, 2, 3)</code>,</li>
		<li>use dummy semicolon to create mixin call with one argument containing comma separated css list: <code>.name(1, 2, 3;)</code>,</li>
		<li>comma separated default value: <code>.name(@param1: red, blue;)</code></li>
	</ul>
	<p>
		It is legal to define multiple mixins with the same name and number of parameters. Less will use properties of all that can apply. 
		If you used the mixin with one parameter e.g. .mixin(green);, then properties of all mixins with exactly one mandatory parameter will be used:
	</p>
	<pre>
.mixin(@color) {
  	color-1: @color; <span class="pre-comment">//Color is defined through .some .selector div{mixin(#008000)}</span>
}

.mixin(@color; @padding: 2) {
  	color-2: @color;
  	padding-2: @padding;
  <span class="pre-comment">// Padding parameter is defined, Color is defined through .some .selector div{mixin(#008000)}</span>
}

.mixin(@color; @padding; @margin: 2) {
  	color-3: @color;
  	padding-3: @padding;
  	margin: @margin @margin @margin @margin; <span class="pre-comment">// Padding parameter is missing.</span>
}

.some .selector div {
  	.mixin(#008000);
}	
  <span class="pre-comment">// .mixin with a color: #008000; parameter. Only Mixins with defined parameters get outputted</span>
</pre>
	<p>
		Output:
	</p>
	<pre>
.some .selector div {
  	color-1: #008000;
  	color-2: #008000;
  	padding-2: 2;
}
</pre>
</section>



<section id="paramixin3">
	<h3>
		Named Parameters
	</h3>
	<p>
		You can reference parameters not only by their position but also by their name.
	</p>
	<pre>
.mixin(@color: black; @margin: 10px; @padding: 20px) {
  color: @color;
  margin: @margin;
  padding: @padding;
}
.class1 {
  .mixin(@margin: 20px; @color: #33acfe);
}
.class2 {
  .mixin(#efca44; @padding: 40px);
}
	</pre>
	<p>
		Output:
	</p>
	<pre>
.class1 {
  color: #33acfe;
  margin: 20px;
  padding: 20px;
}

.class2 {
  color: #efca44;
  margin: 10px;
  padding: 40px;
}
	</pre>
</section>



<section id="paramixin4">
	<h3>
	The <code>@arguments</code> variable
	</h3>
	<p>

	</p>
	<pre>

	</pre>
</section>



<section id="paramixin5">
	<h3>
		Advanced arguments and the <code>@rest</code> variable
	</h3>
	<p>

	</p>
	<pre>

	</pre>
</section>