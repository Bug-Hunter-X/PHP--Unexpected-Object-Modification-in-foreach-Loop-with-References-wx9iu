# PHP: Unexpected Object Modification in foreach Loop with References

This repository demonstrates a common, subtle bug in PHP related to object references within `foreach` loops.  The code showcases how using references (`&`) in a `foreach` loop can lead to unintended modification of all objects within an array, rather than modifying them individually.  The solution provides a corrected approach.

## Bug Description
When iterating over an array of objects using a `foreach` loop with references, changes made to an object's properties are reflected across all objects in the array.  This is because each loop iteration creates a reference to the same underlying objects, causing side effects that can be unexpected. 

## Solution
The solution illustrates how to avoid this problem by using value copies instead of references. 