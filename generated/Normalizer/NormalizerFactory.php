<?php

namespace Docker\API\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers   = [];
        $normalizers[] = new \Joli\Jane\Runtime\Normalizer\ArrayDenormalizer();
        $normalizers[] = new VersionNormalizer();
        $normalizers[] = new PortNormalizer();
        $normalizers[] = new MountNormalizer();
        $normalizers[] = new LogConfigNormalizer();
        $normalizers[] = new UlimitNormalizer();
        $normalizers[] = new DeviceNormalizer();
        $normalizers[] = new RestartPolicyNormalizer();
        $normalizers[] = new PortBindingNormalizer();
        $normalizers[] = new NodeNormalizer();
        $normalizers[] = new HostConfigNormalizer();
        $normalizers[] = new DeviceWeightNormalizer();
        $normalizers[] = new DeviceRateNormalizer();
        $normalizers[] = new ContainerConfigNormalizer();
        $normalizers[] = new NetworkConfigNormalizer();
        $normalizers[] = new ContainerNetworkNormalizer();
        $normalizers[] = new ContainerStateNormalizer();
        $normalizers[] = new ContainerNormalizer();
        $normalizers[] = new ContainerTopNormalizer();
        $normalizers[] = new ContainerChangeNormalizer();
        $normalizers[] = new ContainerWaitNormalizer();
        $normalizers[] = new GraphDriverNormalizer();
        $normalizers[] = new ImageItemNormalizer();
        $normalizers[] = new ImageNormalizer();
        $normalizers[] = new ImageHistoryItemNormalizer();
        $normalizers[] = new ImageSearchResultNormalizer();
        $normalizers[] = new AuthConfigNormalizer();
        $normalizers[] = new SystemInformationNormalizer();
        $normalizers[] = new RegistryConfigNormalizer();
        $normalizers[] = new RegistryNormalizer();
        $normalizers[] = new CommitResultNormalizer();
        $normalizers[] = new ExecCreateResultNormalizer();
        $normalizers[] = new ExecConfigNormalizer();
        $normalizers[] = new ExecStartConfigNormalizer();
        $normalizers[] = new ExecCommandNormalizer();
        $normalizers[] = new ProcessConfigNormalizer();
        $normalizers[] = new VolumeListNormalizer();
        $normalizers[] = new VolumeNormalizer();
        $normalizers[] = new VolumeConfigNormalizer();
        $normalizers[] = new NetworkNormalizer();
        $normalizers[] = new IPAMNormalizer();
        $normalizers[] = new IPAMConfigNormalizer();
        $normalizers[] = new NetworkContainerNormalizer();
        $normalizers[] = new NetworkCreateResultNormalizer();
        $normalizers[] = new NetworkCreateConfigNormalizer();
        $normalizers[] = new ContainerConnectNormalizer();
        $normalizers[] = new ContainerDisconnectNormalizer();
        $normalizers[] = new EndpointConfigNormalizer();
        $normalizers[] = new ContainerCreateResultNormalizer();
        $normalizers[] = new BuildInfoNormalizer();
        $normalizers[] = new CreateImageInfoNormalizer();
        $normalizers[] = new PushImageInfoNormalizer();
        $normalizers[] = new ErrorDetailNormalizer();
        $normalizers[] = new ProgressDetailNormalizer();
        $normalizers[] = new EventNormalizer();
        $normalizers[] = new ResourceUpdateNormalizer();
        $normalizers[] = new ContainerUpdateResultNormalizer();
        $normalizers[] = new AuthResultNormalizer();

        return $normalizers;
    }
}
