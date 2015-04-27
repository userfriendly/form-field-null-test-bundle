# form-field-null-test-bundle
Test bundle

## Register bundle in app kernel

```
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new CiscoSystems\FormFieldNullTestBundle\CiscoSystemsFormFieldNullTestBundle(),
        );
        // ...
    }
```

## Add routing

```
employee_bundle:
    resource: "@CiscoSystemsFormFieldNullTestBundle/Resources/config/routing.yml"
    prefix:   /employees
```

## Insert some test data

```
INSERT INTO test__vendor (id, name) VALUES (NULL, 'Vendor 1'), (NULL, 'Vendor 2');
```

## Call up the test page in browser

```
http://myproject.local/app_dev.php/employees
```

