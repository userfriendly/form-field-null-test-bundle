# form-field-null-test-bundle
Test bundle

## Register bundle in app kernel, add routing, update DB schema

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

```
employee_bundle:
    resource: "@CiscoSystemsFormFieldNullTestBundle/Resources/config/routing.yml"
    prefix:   /employees
```

```
php app/console d:s:u --force
```

## Insert some test data

```
INSERT INTO test__vendor (id, name) VALUES (NULL, 'Vendor 1'), (NULL, 'Vendor 2');
```

## Call up the test page in browser

```
http://myproject.local/app_dev.php/employees
```

Add an employee with a vendor. Then add an employee without a vendor.

