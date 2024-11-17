class VMManager {
    public function selectVM(): VirtualMachine {
        $vms = $this->getActiveVMs();
        return $this->balanceLoad($vms);
    }
}
