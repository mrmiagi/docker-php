<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class NetworkConfigNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\NetworkConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\NetworkConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Docker\API\Model\NetworkConfig();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'Bridge')) {
            $object->setBridge($data->{'Bridge'});
        }
        if (property_exists($data, 'Gateway')) {
            $object->setGateway($data->{'Gateway'});
        }
        if (property_exists($data, 'IPAddress')) {
            $object->setIPAddress($data->{'IPAddress'});
        }
        if (property_exists($data, 'IPPrefixLen')) {
            $object->setIPPrefixLen($data->{'IPPrefixLen'});
        }
        if (property_exists($data, 'MacAddress')) {
            $object->setMacAddress($data->{'MacAddress'});
        }
        if (property_exists($data, 'PortMapping')) {
            $object->setPortMapping($data->{'PortMapping'});
        }
        if (property_exists($data, 'Networks')) {
            $value = $data->{'Networks'};
            if (is_object($data->{'Networks'})) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data->{'Networks'} as $key => $value_1) {
                    $values[$key] = $this->serializer->deserialize($value_1, 'Docker\\API\\Model\\ContainerNetwork', 'raw', $context);
                }
                $value = $values;
            }
            if (is_null($data->{'Networks'})) {
                $value = $data->{'Networks'};
            }
            $object->setNetworks($value);
        }
        if (property_exists($data, 'Ports')) {
            $value_2 = $data->{'Ports'};
            if (is_object($data->{'Ports'})) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data->{'Ports'} as $key_1 => $value_3) {
                    $value_4 = $value_3;
                    if (is_array($value_3)) {
                        $values_2 = [];
                        foreach ($value_3 as $value_5) {
                            $values_2[] = $this->serializer->deserialize($value_5, 'Docker\\API\\Model\\PortBinding', 'raw', $context);
                        }
                        $value_4 = $values_2;
                    }
                    if (is_null($value_3)) {
                        $value_4 = $value_3;
                    }
                    $values_1[$key_1] = $value_4;
                }
                $value_2 = $values_1;
            }
            if (is_null($data->{'Ports'})) {
                $value_2 = $data->{'Ports'};
            }
            $object->setPorts($value_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBridge()) {
            $data->{'Bridge'} = $object->getBridge();
        }
        if (null !== $object->getGateway()) {
            $data->{'Gateway'} = $object->getGateway();
        }
        if (null !== $object->getIPAddress()) {
            $data->{'IPAddress'} = $object->getIPAddress();
        }
        if (null !== $object->getIPPrefixLen()) {
            $data->{'IPPrefixLen'} = $object->getIPPrefixLen();
        }
        if (null !== $object->getMacAddress()) {
            $data->{'MacAddress'} = $object->getMacAddress();
        }
        if (null !== $object->getPortMapping()) {
            $data->{'PortMapping'} = $object->getPortMapping();
        }
        $value = $object->getNetworks();
        if (is_object($object->getNetworks())) {
            $values = new \stdClass();
            foreach ($object->getNetworks() as $key => $value_1) {
                $values->{$key} = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $value = $values;
        }
        if (is_null($object->getNetworks())) {
            $value = $object->getNetworks();
        }
        $data->{'Networks'} = $value;
        $value_2            = $object->getPorts();
        if (is_object($object->getPorts())) {
            $values_1 = new \stdClass();
            foreach ($object->getPorts() as $key_1 => $value_3) {
                $value_4 = $value_3;
                if (is_array($value_3)) {
                    $values_2 = [];
                    foreach ($value_3 as $value_5) {
                        $values_2[] = $this->serializer->serialize($value_5, 'raw', $context);
                    }
                    $value_4 = $values_2;
                }
                if (is_null($value_3)) {
                    $value_4 = $value_3;
                }
                $values_1->{$key_1} = $value_4;
            }
            $value_2 = $values_1;
        }
        if (is_null($object->getPorts())) {
            $value_2 = $object->getPorts();
        }
        $data->{'Ports'} = $value_2;

        return $data;
    }
}
