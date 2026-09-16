## Open Source Desktop

_A cozy retreat for single focus, traditional computer tasks_

Open source alternative versions of:

* Music player
* Video player
* Word processor
* Synthesizer
* Notes
* Messaging

### Inspired by kplaylist

Remove kplaylist-specific files

Add as generic module showing message passing

modules/
- kplaylist
  - provide parts that need to go in the outer (parent) document.
  - include(../kplaylist/kptheme/webamp/player.php)

iframe api
- window focus
- play song in webamp
- open new window (window type)

### Testing other sites

Remember CORS is needed to load at all
Try proxy to workaround CORS
