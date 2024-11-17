class ShareService {
    private $contentFormatter;
    
    public function shareContent(Content $content, Platform $platform): void {
        $this->formatForPlatform($content, $platform);
        $this->publishToSocial($content, $platform);
    }
}
