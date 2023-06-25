<?php

/**
 * Copyright (c) 2022-present Tectalic (https://tectalic.com)
 *
 * For copyright and license information, please view the LICENSE file that was distributed with this source code.
 *
 * Please see the README.md file for usage instructions.
 */

declare(strict_types=1);

namespace Tectalic\OpenAi\Models\ChatCompletions;

use Tectalic\OpenAi\Models\AbstractModel;

final class CreateRequest extends AbstractModel
{
    /**
     * List of required property names.
     *
     * These properties must all be set when this Model is instantiated.
     */
    protected const REQUIRED = ['model', 'messages'];

    /**
     * ID of the model to use. See the model endpoint compatibility table for details
     * on which models work with the Chat API.
     *
     * @var string
     */
    public $model;

    /**
     * A list of messages comprising the conversation so far. Example Python code.
     *
     * @var \Tectalic\OpenAi\Models\ChatCompletions\CreateRequestMessagesItem[]
     */
    public $messages;

    /**
     * A list of functions the model may generate JSON inputs for.
     *
     * @var \Tectalic\OpenAi\Models\ChatCompletions\CreateRequestFunctionsItem[]
     */
    public $functions;

    /**
     * Controls how the model responds to function calls. "none" means the model does
     * not call a function, and responds to the end-user. "auto" means the model can
     * pick between an end-user or calling a function.  Specifying a particular
     * function via {"name":\ "my_function"} forces the model to call that function.
     * "none" is the default when no functions are present. "auto" is the default if
     * functions are present.
     *
     * @var mixed
     */
    public $function_call;

    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will
     * make the output more random, while lower values like 0.2 will make it more
     * focused and deterministic.
     * We generally recommend altering this or top_p but not both.
     *
     * Default Value: 1
     *
     * Example: 1
     *
     * @var float|int|null
     */
    public $temperature;

    /**
     * An alternative to sampling with temperature, called nucleus sampling, where the
     * model considers the results of the tokens with top_p probability mass. So 0.1
     * means only the tokens comprising the top 10% probability mass are considered.
     * We generally recommend altering this or temperature but not both.
     *
     * Default Value: 1
     *
     * Example: 1
     *
     * @var float|int|null
     */
    public $top_p;

    /**
     * How many chat completion choices to generate for each input message.
     *
     * Default Value: 1
     *
     * Example: 1
     *
     * @var int|null
     */
    public $n;

    /**
     * If set, partial message deltas will be sent, like in ChatGPT. Tokens will be
     * sent as data-only server-sent events as they become available, with the stream
     * terminated by a data: [DONE] message. Example Python code.
     *
     * Default Value: false
     *
     * @var bool|null
     */
    public $stream;

    /**
     * Up to 4 sequences where the API will stop generating further tokens.
     *
     * Default Value: null
     *
     * @var mixed
     */
    public $stop;

    /**
     * The maximum number of tokens to generate in the chat completion.
     * The total length of input tokens and generated tokens is limited by the model's
     * context length. Example Python code for counting tokens.
     *
     * @var int
     */
    public $max_tokens;

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on
     * whether they appear in the text so far, increasing the model's likelihood to
     * talk about new topics.
     * See more information about frequency and presence penalties.
     *
     * Default Value: 0
     *
     * @var float|int|null
     */
    public $presence_penalty;

    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on their
     * existing frequency in the text so far, decreasing the model's likelihood to
     * repeat the same line verbatim.
     * See more information about frequency and presence penalties.
     *
     * Default Value: 0
     *
     * @var float|int|null
     */
    public $frequency_penalty;

    /**
     * Modify the likelihood of specified tokens appearing in the completion.
     * Accepts a json object that maps tokens (specified by their token ID in the
     * tokenizer) to an associated bias value from -100 to 100. Mathematically, the
     * bias is added to the logits generated by the model prior to sampling. The exact
     * effect will vary per model, but values between -1 and 1 should decrease or
     * increase likelihood of selection; values like -100 or 100 should result in a ban
     * or exclusive selection of the relevant token.
     *
     * Default Value: null
     *
     * @var \Tectalic\OpenAi\Models\ChatCompletions\CreateRequestLogitBias|null
     */
    public $logit_bias;

    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor
     * and detect abuse. Learn more.
     *
     * Example: 'user-1234'
     *
     * @var string
     */
    public $user;
}
