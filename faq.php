<?php require('parts/header.php'); ?>
<body class="theme--dark">
    <?php require('parts/preloader.php'); ?>
    <div id="page" class="page">
        <?php require('parts/navbar.php'); ?>
        <?php require('parts/breadcrumb.php'); ?>
        <section class="pt-4 pb-80 faqs-3 inner-page-hero faqs-section division">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title title-01 mb-50">
                            <p class="fs-18 text-start m-0">Find comprehensive answers to common questions about TubeReaver installation, download features, metadata tagging, troubleshooting, and advanced usage for optimal YouTube content downloading performance.</p>
                            <hr class="my-4">
                        </div>
                    </div>
                </div>
                <div class="faqs-3-questions">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="accordion-wrapper">
                                <ul class="accordion">
                                    <li class="accordion-item is-active wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">1. What system requirements does TubeReaver have?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver requires Ubuntu 22.04 LTS or newer, though it's compatible with most Debian-based distributions. Minimum requirements include Python 3.12+, PyQt6 framework, FFmpeg for audio conversion, and pytubefix backend. The application needs approximately 50MB of disk space for installation and requires a graphical desktop environment (GNOME, KDE, XFCE, etc.) for the GUI interface. For optimal performance with video processing and conversion, we recommend at least 2GB RAM and a modern multi-core processor. Network connectivity is required for downloading YouTube content and metadata retrieval.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">2. What video and audio formats does TubeReaver support?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver supports multiple download formats through three main modes: Highest MP4 mode for best video quality, Audio-only mode for extracting audio as m4a or mp3, and manual itag selection for advanced users. The application uses pytubefix backend which supports various YouTube stream qualities and formats. For audio extraction, FFmpeg converts streams to your chosen format (m4a or mp3) with configurable bitrate. Video downloads preserve original quality up to 1080p (or higher depending on YouTube availability). All downloads include metadata embedding capabilities with cover art support.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">3. How does metadata tagging work?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver provides comprehensive metadata tagging for downloaded content. The application automatically extracts available metadata from YouTube including title, artist, and thumbnail. You can manually override all fields: title, artist, album, track number, year, and genre selection. Cover images can be automatically downloaded from YouTube or you can select custom image files. Metadata is embedded using standard ID3 tags for mp3 and appropriate containers for m4a. The tagging system supports batch operations for playlists, maintaining consistent metadata across multiple downloads. All metadata settings are preserved in the interface between sessions for convenience.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">4. Can I download entire playlists?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Yes, TubeReaver fully supports playlist downloads. Simply paste a playlist URL and the application will fetch all available videos. You can download playlists in video or audio-only mode with consistent settings applied to all items. The interface shows progress for each video in the playlist with individual progress bars and status indicators. Playlist downloads can be paused and resumed, and you can selectively stop individual items without affecting others. Metadata can be applied consistently across the playlist or customized per item. The application handles large playlists efficiently with configurable batch sizes and parallel download limits to manage system resources.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">5. How does the progress tracking work?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver provides detailed progress tracking through a dedicated table interface. Each download shows: video title, URL, destination filename, modification time, file size, and a progress bar with percentage. The application uses QThread for background downloading to keep the GUI responsive. Progress updates are delivered via signals that update the table in real-time. For audio conversions, separate progress tracking shows both download and conversion stages. The table includes sortable columns and persistent session data. Completed downloads remain in the table with green indicators, while failed downloads show error details. All progress data is preserved until you clear the table manually.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">6. What is itag selection and when should I use it?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>iTag selection is an advanced feature that allows manual specification of YouTube stream codes for precise format control. Each iTag corresponds to specific video/audio combinations with defined resolution, codec, and container. Use iTag mode when you need specific formats not available through automatic selection, such as: downloading only audio streams without video, selecting particular codecs (like VP9 vs H.264), or accessing higher resolutions that automatic detection might miss. Common iTags include: 137 (1080p video only), 140 (128kbps audio only), and 251 (160kbps Opus audio). The application includes a reference guide and remembers your preferred iTag in preferences for consistency across downloads.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">7. How do I handle age-restricted content?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver supports OAuth authentication for downloading age-restricted or private YouTube content. You can enable OAuth in Preferences by providing authentication cookies or using the built-in browser authentication flow. The application securely handles OAuth tokens with local encryption and doesn't store credentials on disk. For most public content, OAuth isn't required. When attempting to download restricted content without authentication, you'll receive a clear error message with instructions for enabling OAuth. The OAuth implementation respects YouTube's terms of service and only requests necessary permissions for content access. Tokens can be revoked at any time through your Google account security settings.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">8. Can I customize filename patterns?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Yes, TubeReaver offers extensive filename customization through prefix and suffix options in Preferences. You can add static text, date patterns, or metadata variables to filenames. Available patterns include: {title} for video title, {artist} for artist name, {date} for download date, and {time} for timestamp. For example, prefix "Music_" with suffix "_{date}" would create "Music_SongTitle_2024-01-15.mp3". The application automatically handles invalid filename characters by converting them to safe alternatives. You can also enable/disable YouTube's automatic title cleaning which removes special characters. All filename settings apply to both single downloads and playlist items, with each item getting unique filenames based on its metadata.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">9. What happens if I stop a download mid-process?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver implements graceful interruption handling through its Stop button and signal management. When stopped during download, the application immediately halts network transfers, completes any in-progress file writes safely, and cleans up temporary files. Partial downloads are removed unless you've enabled resume capability in preferences. The interface updates immediately to show the stopped status with appropriate error messages. For playlist downloads, stopping one item doesn't affect others—you can continue with remaining items. The application maintains download queues and can restart interrupted downloads from the beginning if needed. This ensures file system integrity and prevents corrupted output files even during unexpected interruptions.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">10. How are preferences saved and managed?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver saves all preferences to ~/.config/tubereaver/tubereaver.conf using a secure ConfigManager. Settings include: default download directory, preferred format (MP4/m4a/mp3), default mode (Highest MP4/Audio-only/itag), filename prefixes/suffixes, OAuth configuration, and metadata defaults. The application validates all preferences on startup and provides sensible defaults for missing values. Preferences are automatically saved when changed and loaded on application start. You can export/import configuration files for backup or transfer between systems. Sensitive data like OAuth tokens are encrypted within the configuration file. The Preferences dialog provides search functionality and categorized sections for easy management of all settings.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">11. Does TubeReaver work with non-YouTube sites?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver is specifically designed for YouTube and uses the pytubefix library which is optimized for YouTube's API and streaming protocols. It does not support other video platforms like Vimeo, Dailymotion, or social media sites. The application may work with some YouTube-like sites that use similar streaming technology, but this isn't officially supported. For YouTube content, it handles various URL formats: standard video links, playlist links, embedded links, and shortened URLs. The application validates URLs before processing and provides clear error messages for unsupported sites. If you need multi-platform downloading, consider specialized tools for each platform rather than expecting TubeReaver to handle non-YouTube sources.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">12. How does audio conversion work?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Audio conversion in TubeReaver uses FFmpeg for reliable format conversion and metadata embedding. When you select Audio-only mode, the application downloads the highest quality audio stream available from YouTube, then uses FFmpeg to convert to your chosen format (m4a or mp3). The conversion process includes: extracting audio from the container, encoding to target format with optimized settings, embedding metadata and cover art, and applying replay gain if enabled. You can configure bitrate (128kbps, 192kbps, 256kbps, 320kbps) in Preferences. The application verifies FFmpeg installation on startup and provides clear guidance if missing. Conversion happens in the background with progress tracking separate from download progress.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">13. Can I batch download multiple videos?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver supports batch downloading through playlist functionality or by adding multiple URLs sequentially. You can paste multiple video URLs (one per line) and they will be processed in sequence. For large batches, playlist mode is more efficient as it fetches all items automatically. The application manages concurrent downloads based on your system capabilities—adjustable in Preferences to balance speed and resource usage. Each batch item maintains independent progress tracking and error handling. You can pause/resume batch operations, remove individual items from the queue, and apply consistent metadata across all items. Completed batches show summary statistics including total download size, time taken, and success/failure counts.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">14. What happens if FFmpeg is not installed?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver checks for FFmpeg installation during startup and when attempting audio conversion. If FFmpeg is missing, you'll receive a clear error message with installation instructions for your distribution. For Ubuntu/Debian systems: 'sudo apt install ffmpeg'. The application can continue with video-only downloads without FFmpeg, but audio conversion features will be disabled. In Preferences, you can specify a custom FFmpeg path if it's installed in a non-standard location. The application validates FFmpeg functionality by testing common operations and provides detailed diagnostics if FFmpeg exists but doesn't work correctly. Some distributions may require additional codec packages for full format support—the application guides you through verification steps.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">15. How are downloads organized on disk?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver organizes downloads in your specified output directory (default: ~/Downloads/TubeReaver/). You can configure subdirectory organization in Preferences: create folders by date, by artist, or by album. The application uses clean filenames based on video titles with your specified prefixes/suffixes. For playlists, you can enable automatic folder creation using playlist names. All temporary files are stored in ~/.cache/tubereaver/ and cleaned automatically after successful downloads. Failed downloads leave temporary files for potential recovery—these are cleaned on next successful download or manually through cache management. The interface includes a "Open Download Folder" button for quick access to your downloaded content.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">16. Can I resume interrupted downloads?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver supports download resumption for most YouTube streams that support HTTP range requests. When enabled in Preferences, interrupted downloads create .partial files that can be resumed later. The application detects existing partial files on retry and attempts to resume from the last successful byte. Resume functionality depends on YouTube's server support and stream type—some adaptive streams may not support resumption. For playlist downloads, interrupted items can be restarted individually. The interface clearly indicates resumable vs non-resumable downloads. Resume data is stored in ~/.cache/tubereaver/resume/ with expiration to prevent stale partial files accumulating. You can manually clear resume data through the application interface or file system.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">17. How does the genre selection work?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Genre selection in TubeReaver provides standardized ID3 genre tags for audio files. The application includes the complete ID3v1 genre list (Rock, Pop, Jazz, Classical, etc.) plus common YouTube categories. You can select a default genre in Preferences that applies to all downloads, or specify per-download genres in the main interface. For batch operations, you can apply the same genre to multiple items. The genre is embedded as both numeric ID3 code and text string for maximum compatibility with media players. Custom genre text is also supported if your preferred genre isn't in the standard list. Genre metadata works with both mp3 and m4a formats, though implementation details vary by container format and player compatibility.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">18. What logging and error reporting features exist?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>TubeReaver provides comprehensive logging through multiple channels. The main interface shows real-time status messages and error notifications. Detailed session logs are saved to ~/.cache/tubereaver/logs/ with rotation management. You can enable verbose logging in Preferences for troubleshooting, which includes network requests, FFmpeg commands, and metadata operations. Error messages include: YouTube access errors, network failures, disk space issues, permission problems, and format conversion errors. The application attempts to provide actionable error messages with suggested solutions. For reporting issues, you can export complete session logs including system information and configuration. Debug mode provides additional technical details for developer troubleshooting.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">19. How do I troubleshoot download failures?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Common download failures typically involve network issues, YouTube changes, or format problems. First, verify your internet connection and try accessing the YouTube video in a browser. Check that the URL is valid and the video isn't region-restricted or private. Enable verbose logging in Preferences to see detailed error messages. For "stream not found" errors, try different download modes (Highest MP4 vs Audio-only) or different iTags. Ensure you have sufficient disk space in your download directory. If FFmpeg conversion fails, verify FFmpeg installation and test with a simple conversion. For persistent issues, check the GitHub repository for known problems with recent YouTube changes. Include complete error logs when reporting issues for faster resolution.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item acc-last-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">20. Where can I get support or report issues?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Primary support channels include our GitHub repository issue tracker for bug reports, feature requests, and technical questions. Before reporting issues, please check existing issues and the troubleshooting guide. Include detailed information: TubeReaver version, distribution/version, Python version, FFmpeg version, error messages, and steps to reproduce. For community support, you can participate in discussions on relevant Linux forums and distribution-specific communities. The application includes built-in diagnostic tools for generating system reports. For security vulnerabilities, please use GitHub's private reporting feature. We maintain regular updates with bug fixes and YouTube compatibility improvements—subscribe to repository notifications or check our release page for updates.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="more-questions">
                            <p class="fs-18">Can't find the answer to your question?</p>
                            <a rel="noreferrer nofollow noopener" target="_blank" href="https://github.com/tubereaver/app/issues" class="btn btn-md r-08 btn--tra-black hover--purple">
                                <i class="fa-brands fa-github me-2"></i>
                                <span class="btn-text">
                                    <span class="anim-txt">Open GitHub Issue</span>
                                    <span class="anim-txt">Open GitHub Issue</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require('parts/cta.php'); ?>
        <?php require('parts/footer.php'); ?>
        <?php require('parts/scripts.php'); ?>
    </div>
</body>
</html>