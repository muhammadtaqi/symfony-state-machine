# Finite-state machine using Symfony framework


## Symfony Bundles for state machines 

There are several bundles implementing state machines on top of Symfony framework. The most popular ones are:

- [Workflow](https://symfony.com/doc/current/components/workflow.html). This component was added in Symfony 3.2 release and is the obvious first choice for the most of new projects. It has an excellent integration with other Symfony components, supports such features as events and multiple states and has implementation of both workflows and finite state machines.
- [StateMachineBundle](https://github.com/winzou/StateMachineBundle). This bundle is the simplest lightweight implementation of state machines. Unlike the rest, it does not support events or multiple states, but is compatible with 2.x and 3.x versions of Symfony and may become a good choice for projects that are based on LTS versions of Symfony.
- [Finite](http://finite.readthedocs.io/en/latest/). This is a full-featured alternative for the standard Workflow component, that provides some additional interesting features, for example, transition properties that can be passed to corresponding event listeners on transition.

## Useful links:
   
- http://symfony.com/blog/new-in-symfony-3-2-workflow-component
- https://github.com/winzou/StateMachineBundle
- http://finite.readthedocs.io/
- https://github.com/jakesgordon/javascript-state-machine