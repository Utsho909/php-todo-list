bplist00�_WebMainResource�	
_WebResourceFrameName^WebResourceURL_WebResourceTextEncodingName_WebResourceData_WebResourceMIMETypeP_file:///index.htmlUutf-8O&<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="2487.7">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica}
  </style>
</head>
<body>
<p class="p1">&lt;?php</p>
<p class="p1">$tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES);</p>
<p class="p1">?&gt;</p>
<p class="p1">&lt;!DOCTYPE html&gt;</p>
<p class="p1">&lt;html&gt;</p>
<p class="p1">&lt;head&gt;&lt;title&gt;To-Do List&lt;/title&gt;&lt;/head&gt;</p>
<p class="p1">&lt;body&gt;</p>
<p class="p1">&lt;h2&gt;My To-Do List&lt;/h2&gt;</p>
<p class="p1">&lt;form action="add.php" method="post"&gt;</p>
<p class="p1"><span class="Apple-converted-space">    </span>&lt;input type="text" name="task" required&gt;</p>
<p class="p1"><span class="Apple-converted-space">    </span>&lt;button type="submit"&gt;Add&lt;/button&gt;</p>
<p class="p1">&lt;/form&gt;</p>
<p class="p1">&lt;ul&gt;</p>
<p class="p1">&lt;?php foreach ($tasks as $index =&gt; $task): ?&gt;</p>
<p class="p1"><span class="Apple-converted-space">    </span>&lt;li&gt;</p>
<p class="p1"><span class="Apple-converted-space">        </span>&lt;?php echo htmlspecialchars($task); ?&gt;</p>
<p class="p1"><span class="Apple-converted-space">        </span>&lt;a href="delete.php?index=&lt;?php echo $index; ?&gt;"&gt;❌&lt;/a&gt;</p>
<p class="p1"><span class="Apple-converted-space">    </span>&lt;/li&gt;</p>
<p class="p1">&lt;?php endforeach; ?&gt;</p>
<p class="p1">&lt;/ul&gt;</p>
<p class="p1">&lt;/body&gt;</p>
<p class="p1">&lt;/html&gt;</p>
</body>
</html>
Ytext/html    ( ? N l ~ � � � ��                           �