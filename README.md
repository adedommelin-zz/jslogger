# JSLogger 
Simple solution to track client-side Javascript errors using StatsD & Graphite.

![jslogger_graphite.png](http://www.tuxz.net/blog/images/jslogger_graphite.png)

## Usage
See associated blog post : http://www.tuxz.net/blog/archives/2012/12/09/jslogger_-_track_client-side_errors_using_php_sta/

MySQL table structure :
```
	CREATE TABLE `logs` (
	  `url` VARCHAR(255) NOT NULL,
	  `msg` TEXT NOT NULL,
	  `ua`  VARCHAR(255) NOT NULL,
	  `ts`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;
```


## Author
Alexandre De Dommelin - (http://www.tuxz.net/)

### Licence
```
            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
 Everyone is permitted to copy and distribute verbatim or modified
 copies of this license document, and changing it is allowed as long
 as the name is changed.

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

  0. You just DO WHAT THE FUCK YOU WANT TO.

```

