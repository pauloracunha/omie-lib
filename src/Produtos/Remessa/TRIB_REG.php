<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Informações sobre a Tributação Regular do IBS e CBS.
 *
 * @pw_element string $cCstIbsCbsReg Código da Situação Tributária do IBS e CBS (Tributação Regular).<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element string $cClassTribReg Código de Classificação Tributária do IBS e CBS (Tributação Regular).<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nAliqIbsUfReg Valor da alíquota do IBS da UF na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nAliqIbsMunReg Valor da alíquota do IBS do Município na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nAliqCbsReg Valor da alíquota da CBS na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nValIbsUfReg Valor do Tributo do IBS da UF na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nValIbsMunReg Valor do Tributo do IBS do Município na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_element decimal $nValCbsReg Valor do Tributo da CBS na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
 * @pw_complex TRIB_REG
 */
class TRIB_REG{
	/**
	 * Código da Situação Tributária do IBS e CBS (Tributação Regular).<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var string
	 */
	public string $cCstIbsCbsReg;
	/**
	 * Código de Classificação Tributária do IBS e CBS (Tributação Regular).<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var string
	 */
	public string $cClassTribReg;
	/**
	 * Valor da alíquota do IBS da UF na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nAliqIbsUfReg;
	/**
	 * Valor da alíquota do IBS do Município na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nAliqIbsMunReg;
	/**
	 * Valor da alíquota da CBS na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nAliqCbsReg;
	/**
	 * Valor do Tributo do IBS da UF na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nValIbsUfReg;
	/**
	 * Valor do Tributo do IBS do Município na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nValIbsMunReg;
	/**
	 * Valor do Tributo da CBS na tributação regular.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme a configuração do cenário fiscal.
	 *
	 * @var decimal
	 */
	public float $nValCbsReg;
}
