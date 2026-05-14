<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Vencimento e Textos NFS-e
 *
 * @pw_element decimal $aliqISS Alíquota de ISS.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $valorISS Valor do ISS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element string $retISS Retém ISS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element string $cUtilizaValorImposto Indica se o valor informado para os Impostos Federais deverá ser mantido ao invés de ser recalculado a partir da alíquota.<BR><BR>Preenchimento opcional. O padrão é "N".<BR><BR>Assim:<BR><BR>Caso seja informado "N", indica que valor do imposto deve ser calculado a partir da alíquota e base de cálculo.<BR><BR>Caso seja informado "S", indica que o valor do imposto será mantido e a alíquota será recalculada a partir do valor do imposto e base de cálculo.
 * @pw_element decimal $aliqIR Alíquota de IR.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
 * @pw_element decimal $valorIR Valor do IR.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
 * @pw_element string $retIR Retém IR  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element decimal $aliqPIS Alíquota de PIS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
 * @pw_element decimal $valorPIS Valor do PIS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
 * @pw_element string $retPIS Retém PIS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element decimal $aliqCOFINS Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element decimal $valorCOFINS Alíquota de COFINS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
 * @pw_element string $retCOFINS Retém COFINS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element decimal $aliqCSLL Alíquota de CSLL.<BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
 * @pw_element decimal $valorCSLL Valor de CSLL.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
 * @pw_element string $retCSLL Retém CSLL  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element decimal $aliqINSS Alíquota de INSS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
 * @pw_element decimal $valorINSS Valor de INSS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
 * @pw_element string $retINSS Retém INSS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element decimal $redBaseINSS Percentual de Redução da Base de Cálculo do INSS.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $redBasePIS Percentual de Redução da Base de Cálculo do PIS.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $redBaseCOFINS Percentual de Redução da Base de Cálculo do COFINS.<BR><BR>Preenchimento opcional.
 * @pw_element boolean $lDeduzISS Deduz o ISS da Base de Cálculo de PIS e COFINS
 * @pw_element string $cstIbsCbs Código da Situação Tributária IBS/CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $aliqCbs Alíquota do CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $aliqIbsUf Alíquota do IBS Estadual.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $aliqIbsMun Alíquota do Alíquota do IBS Municipal.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $percReducaoIbsUf Percentual redução IBS municipal.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $percReducaoIbsMun Percentual redução IBS estadual.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $percReducaoCbs Percentual redução CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element string $classTrib Código de Classificação Tributária.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element string $indOper Código Indicador de Operação.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element string $manIbsMun Indica que houve alteração manual da alíquota de IBS Municipal.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_element string $manIbsUf Indica que houve alteração manual da alíquota de IBS Estadual.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_element string $manCbs Indica que houve alteração manual da alíquota de CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_element decimal $valorCbs Valor do CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_element decimal $valorIbsUf Valor do IBS Estadual.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_element decimal $valorIbsMun Valor do IBS Municipal.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_complex itemImpostos
 */
class ItemImpostos{
	/**
	 * Alíquota de ISS.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $aliqISS;
	/**
	 * Valor do ISS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var decimal
	 */
	public float $valorISS;
	/**
	 * Retém ISS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $retISS;
	/**
	 * Indica se o valor informado para os Impostos Federais deverá ser mantido ao invés de ser recalculado a partir da alíquota.<BR><BR>Preenchimento opcional. O padrão é "N".<BR><BR>Assim:<BR><BR>Caso seja informado "N", indica que valor do imposto deve ser calculado a partir da alíquota e base de cálculo.<BR><BR>Caso seja informado "S", indica que o valor do imposto será mantido e a alíquota será recalculada a partir do valor do imposto e base de cálculo.
	 *
	 * @var string
	 */
	public string $cUtilizaValorImposto;
	/**
	 * Alíquota de IR.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
	 *
	 * @var decimal
	 */
	public float $aliqIR;
	/**
	 * Valor do IR.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
	 *
	 * @var decimal
	 */
	public float $valorIR;
	/**
	 * Retém IR  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $retIR;
	/**
	 * Alíquota de PIS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
	 *
	 * @var decimal
	 */
	public float $aliqPIS;
	/**
	 * Valor do PIS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
	 *
	 * @var decimal
	 */
	public float $valorPIS;
	/**
	 * Retém PIS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $retPIS;
	/**
	 * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var decimal
	 */
	public float $aliqCOFINS;
	/**
	 * Alíquota de COFINS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
	 *
	 * @var decimal
	 */
	public float $valorCOFINS;
	/**
	 * Retém COFINS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $retCOFINS;
	/**
	 * Alíquota de CSLL.<BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
	 *
	 * @var decimal
	 */
	public float $aliqCSLL;
	/**
	 * Valor de CSLL.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
	 *
	 * @var decimal
	 */
	public float $valorCSLL;
	/**
	 * Retém CSLL  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $retCSLL;
	/**
	 * Alíquota de INSS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
	 *
	 * @var decimal
	 */
	public float $aliqINSS;
	/**
	 * Valor de INSS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
	 *
	 * @var decimal
	 */
	public float $valorINSS;
	/**
	 * Retém INSS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $retINSS;
	/**
	 * Percentual de Redução da Base de Cálculo do INSS.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $redBaseINSS;
	/**
	 * Percentual de Redução da Base de Cálculo do PIS.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $redBasePIS;
	/**
	 * Percentual de Redução da Base de Cálculo do COFINS.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $redBaseCOFINS;
	/**
	 * Deduz o ISS da Base de Cálculo de PIS e COFINS
	 *
	 * @var boolean
	 */
	public bool $lDeduzISS;
	/**
	 * Código da Situação Tributária IBS/CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var string
	 */
	public string $cstIbsCbs;
	/**
	 * Alíquota do CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $aliqCbs;
	/**
	 * Alíquota do IBS Estadual.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $aliqIbsUf;
	/**
	 * Alíquota do Alíquota do IBS Municipal.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $aliqIbsMun;
	/**
	 * Percentual redução IBS municipal.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $percReducaoIbsUf;
	/**
	 * Percentual redução IBS estadual.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $percReducaoIbsMun;
	/**
	 * Percentual redução CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $percReducaoCbs;
	/**
	 * Código de Classificação Tributária.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var string
	 */
	public string $classTrib;
	/**
	 * Código Indicador de Operação.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var string
	 */
	public string $indOper;
	/**
	 * Indica que houve alteração manual da alíquota de IBS Municipal.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var string
	 */
	public string $manIbsMun;
	/**
	 * Indica que houve alteração manual da alíquota de IBS Estadual.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var string
	 */
	public string $manIbsUf;
	/**
	 * Indica que houve alteração manual da alíquota de CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var string
	 */
	public string $manCbs;
	/**
	 * Valor do CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var decimal
	 */
	public float $valorCbs;
	/**
	 * Valor do IBS Estadual.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var decimal
	 */
	public float $valorIbsUf;
	/**
	 * Valor do IBS Municipal.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var decimal
	 */
	public float $valorIbsMun;
}
