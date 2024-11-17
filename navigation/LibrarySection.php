class LibrarySection {
    public function displayLibrary(): Response {
        $this->loadLibraryContent();
        return $this->renderLibraryView();
    }
}
