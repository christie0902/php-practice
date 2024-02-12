class AudioPlayer {
    constructor (songID) {
        //song
        this.songID = songID;
        this.songName = null;
        this.artist = null;
        this.song_length = null;
        this.album = null;
        this.date_of_release = null;

        //playback
        this.isPlaying = false;
        this.current_time = 0;
        this.song_index = null;
        this.play_mode = 'forward';
        this.reapeat_mode = 'no-repeat'; //no-repeat|repeat list | repeat one
        this.volume = 50;
        this.is_minified = false;
        this.menu_open = false;
        this.playlist_open = false;

        this.playlist = new Playlist;
        this.favorite = new Playlist;

        //elements
        this.progressBar = null;
        this.infoBar = null;
        this.shuffle_button = null;
        this.previous_button = null;
        this.next_button = null;
        this.play_button = null;
        this.stop_button = null;
    }

    play(progress) {
        // event listener for play button to execute
        // take in the progress and continue with the same song ID
    }

    stop(e) {
        // event listener for stop button to execute
        // stop playing and store progress in $progress
    }

    nextSong(songID){
        const next_song = this.playlist.getNextSong();
        this.song_id = next_song.id;
        this.song_index++;
        //play the next one in queue
    }

    repeat(songID) {
        // take in the ID of the song and run a while loop with condition stop when deselect
    }

    shuffle(songList) {
        // take songList as an array and use Math.random to choose random song
        // execute play when song finishes
        // can be a playlist feature
    }

    setVolume(volume) {
        this.volume = Math.max(0, Math.min(100,volume));
    }

    volumeUp(e) {
        // increase volume based on the button clicks
    }
    volumeDown(e) {
        // decrease volume based on the button clicks
    }

    mute() {}

    changeSong () {
        // listen to the option select in the list of song to get song ID or end of Song
        // change song ID and run play
    }

    endOfSong () {
        //song finishes, play next song in the queue, change progress and title
    }

    showProgress() {
        //visualize progress bar based on the time of the song
    }

    playForward (current_time, event) {
        // listen to button and +10s
    }

    playBackward (current_time, event) {
        // listen to button and -10s
    }

    addSongTolist () {}

    addToFav() {}

    errorHandle () {
        //show error when song cannot load
    }

    renderInElement (element) {}
}